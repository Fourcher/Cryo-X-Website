Users
    id
    name
    email

Product
    id
    sku_code
    title
    short_description
    long_description
    price
    sku_code
    stock_available
    stock_reserved
    status

product_image
    id
    product_id
    image_file
    caption
    is_primary
    status

product_stock_count
    date
    product_id
    stock_available
    stock_reserved

product_variable_price
    id
    product_id
    lower_amount_threshold
    upper_amount_threshold
    new_price

discount_codes
    id
    code
    description
    valid_from
    valid_to
    type
    amount
    uses
    status

basket
    id
    user_id
    <!-- order_id -->
    subtotal
    postage
    discount_code_id
    discount_amount
    total
    status

basket_item
    id
    basket_id
    product_id
    product_price
    amount
    subtotal

address
    first_name
    last_name
    line_1
    line_2
    city
    state
    zip
    country

order
    id
    basket_id
    user_id
    email_address
    subtotal
    postage
    discount_code_id
    discount_amount
    total
    delivery_address_id
    billing_address_id
    customer_notes
    status
    shipping_reference
    shipping_information
    shipping_status

order_items
    id
    product_id
    product_price
    amount
    subtotal

transaction
    id
    order_id
    amount
    gateway
    gateway_reference
    status

