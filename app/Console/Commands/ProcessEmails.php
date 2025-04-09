<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class ProcessEmails extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'emails:process';

    /**
     * The console command description.
     */
    protected $description = 'Process unsent emails and send them using Laravel Mail functionality';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Fetch unsent emails
        $unsentEmails = Email::where('is_sent', false)->get();

        foreach ($unsentEmails as $email) {
            try {
                // Prepare data for the Blade template
                $data = ['body' => nl2br($email->body)];

                // Send the email using a Blade HTML layout
                Mail::send('emails.layout', $data, function ($message) use ($email) {
                    $message->to($email->recipient)
                            ->bcc('jordan@cryox.co')
                            ->subject($email->subject);
                });

                // Update email status
                $email->update([
                    'is_sent' => true,
                    'sent_at' => Carbon::now(),
                ]);

                $this->info("Email sent to {$email->recipient}");
            } catch (\Exception $e) {
                $this->error("Failed to send email to {$email->recipient}: {$e->getMessage()}");
            }
        }

        $this->info('All unsent emails have been processed.');
    }
}
