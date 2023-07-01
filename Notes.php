Pending Work List:
1.Add Permission for Module wise action buttons (Menu & Submenu Done)
2.Add Localization (lang/en)

Next Tasks :

- Changes Currency value from global Variable ($currency)
- Change Status Value From Table Product Add/Update Till Status



----------------------------------------------------------------------------------------------------
- Order ma seller wise order items male and delivery charges too
- Manage order items separately, In eCart when I delete a product, in orders also it's taken null values, need to improve it.
- Unit filtration (right now product ma we can add mismatch units like ltr and kg with the same product need to reduce that exception) (Working)
- COD order - Display as Transaction

$ git diff --name-status 1.3..1.4


Use Full Commands :

php artisan cache:clear
php artisan config:clear
php artisan passport:install
php artisan cache:forget spatie.permission.cache



php artisan make:migration add_newcolumnname_to_tablename --table="tablename"
example

php artisan make:migration add_remark_to_sellers_table --table=sellers
php artisan make:migration add_row_order_to_sections_table --table=sections


php artisan make:migration add_type_link_to_notifications_table --table=notifications


Can change order status to Delivered?

change_order_status_delivered

assign_delivery_boy


git commands

git diff --name-status 1.2..1.3

php artisan make:migration add_delivery_boy_bonus_details_to_orders_table --table=orders















/*{
"dashboard": "डैशबोर्ड",
"orders": "Orders",
"categories": "Categories",
"add_category": "Add Category",
"manage_categories": "Manage Categories",
"order_categories": "Order Categories",
"products": "Products",
"manage_products": "Manage Products",
"add_product": "Add Product",
"media": "Media",
"bulk_upload": "Bulk Upload",
"taxes": "Taxes",
"product_order": "Product Order",
"sellers": "Sellers",
"manage_sellers": "Manage Sellers",
"add_seller": "Add Seller",
"seller_commissions": "Seller Commissions",
"seller_wallet_transactions": "Seller Wallet Transactions",
"home_sliders": "Home Sliders",
"add_home_slider": "Add Home Slider",
"manager_home_sliders": "Manager Home Sliders",

"offer_image": "Offer Image",
"add_offer_image": "Add Offer Image",
"manage_offer_images": "Manage Offer Images",

"promo_code": "Promo Code",
"add_promo_code": "Add Promo Code",
"manage_promo_code": "Manage Promo Code",

"return_requests": "Return Requests",
"withdrawal_requests": "Withdrawal Requests",
"delivery_boys": "Delivery Boys",
"add_delivery_boy": "Add Delivery Boy",
"manage_delivery_boys": "Manage Delivery Boys",
"fund_transfers": "Fund Transfers",
"delivery_boy_cash": "Delivery boy cash",
"notifications": "Notifications",
"send_notifications": "Send Notifications",
"manage_notifications": "Manage Notifications",
"web_settings": "Web Settings",
"header": "Header",
"social_media": "Social Media",
"about": "About",
"policies": "Policies",
"system": "System",
"time_slots": "Time Slots",
"store_settings": "Store Settings",
"units": "Units",
"payment_methods": "Payment Methods",
"notifications_settings": "Notifications Settings",
"contact_us": "Contact Us",
"about_us": "About Us",
"customer_policies": "Customer Policies",
"delivery_boy_policies": "Delivery Boy Policies",
"privacy_policy_manager_app": "Privacy Policy Manager App",
"policies_seller": "Seller Policies",
"secret_key": "Secret Key",
"shipping_methods": "Shipping Methods",
"system_registration": "System Registration",
"location": "Location",
"manage_cities": "Manage Cities",
"add_city": "Add City",
"deliverable_area": "Deliverable Area",
"featured_sections": "Featured Sections",
"customers": "Customers",
"wishlists": "Wishlists",
"transactions": "Transactions",
"manage_customer_wallet": "Manage Customer Wallet",
"newsletter": "Newsletter",
"reports": "Reports",
"product_sales_report": "Product Sales Report",
"sales_reports": "Sales Reports",
"system_users": "System Users",
"role": "Role",
"faqs": "FAQs",
"products_sold_out": "Product(s) sold out!",
"more_info": "More Info",
"products_in_low_stock": "Product(s) in low stock!",
"weekly_sales": "Weekly Sales",
"total_sale_in_last_week": "Total Sale In Last Week",
"month": "Month",
"product_category_count": "Product Category Count",
"top_sellers": "Top Sellers",
"total_revenue": "Total Revenue",
"top_categories": "Top Categories",
"search": "Search",
"latest_orders": "Latest Orders",
"status": "Status",
"all_orders": "All Orders",
"seller": "Seller",
"select_seller": "Select Seller",
"loading": "Loading...",
"total": "Total",
"dcharges": "D.Charges",
"tax": "Tax",
"disc": "Disc.",
"promo_disc": "Promo Disc.",
"wallet_used": "Wallet Used",
"ftotal": "F.Total",
"delete": "Delete",
"edit": "Edit",
"answer": "Answer",
"save": "Save",
"update": "Update",
"validate_now": "Validate Now",
"view": "View",
"clear": "Clear",
"upload": "Upload",
"refresh": "Refresh",
"id": "ID",
"store_name": "Store Name",
"actions": "Actions",
"category": "Category",
"oid": "O.ID",
"user": "User",
"mobile": "Mobile",
"tax_per": "Tax(%)",
"disc_per": "Disc.(%)",
"promo_disc_per": "Promo Disc.",
"p_method": "P.Method",
"d_time": "D.Time",
"no_category_found": "No Category Found!",
"wallet_recharged_successfully": "Wallet recharged successfully!",
"product_already_added_as_favorite": "Product already added as favorite!",
"item_added_in_users_favorite_list_successfully": "Item added in user's favorite list successfully",
"item_removed_from_users_favorite_list_successfully": "Item removed from user's favorite list successfully",
"no_product_found": "No Product Found",
"all_items_removed_from_users_favorite_list_successfully": "All items removed from user's favorite list successfully",
"no_faq_found": "No Faq found",
"no_newsletter_found": "No Newsletter found",
"offer_saved_successfully": "Offer Saved Successfully",
"no_offer_found": "No Offer Found",
"offer_deleted_successfully": "Offer Deleted Successfully",
"slider_images_saved_successfully": "Slider Images Saved Successfully",
"no_slider_found": "No Slider Found",
"slider_deleted_successfully": "Slider Deleted Successfully",
"no_city_found": "No City Found",
"we_doesnt_delivery_at_selected_city": "We doesn't delivery at selected city",
"we_doesnt_delivery_at_selected_location": "We doesn't delivery at selected location",
"something_is_missing": "Something is missing",
"seller_not_found": "Seller not found",
"no_notification_found": "No Notification Found",
"address_not_found": "Address Not Found",
"address_deleted_successfully": "Address Deleted Successfully",
"no_items_found_in_users_cart": "No item(s) found in users cart",
"total_allowed_quantity_for_this_product_is": "Total allowed quantity for this product is ",
"item_updated_in_users_cart_successfully": "Item updated in users cart successfully",
"item_not_found": "Item not found",
"item_added_to_users_cart_successfully": "Item added to users cart successfully",
"something_went_wrong": "Something went wrong",
"not_allowed_to_add_to_cart_as_your_account_is_de_activated": "Not allowed to add to cart as your account is de-activated",
"opps_stock_is_not_available": "Opps stock is not available",
"no_such_item_available": "No such item available",
"item_removed_from_users_cart_successfully": "Item removed from users cart successfully",
"all_items_removed_from_users_cart_successfully": "All items removed from users cart successfully",
"item_removed_users_cart_due_to_0_quantity": "Item removed users cart due to 0 quantity",
"item_added_to_save_for_later_successfully": "Item added to save for later successfully",
"item_remove_from_save_for_later_successfully": "Item remove from save for later successfully",
"please_choose_at_least_one_item": "Please choose at least one item",
"please_pass_all_the_fields": "Please pass all the fields",
"user_register_successfully": "User Register Successfully",
"user_not_found": "User not found",
"user_is_unauthorised_kindly_contact_admin": "User is unauthorised, Kindly Contact Admin",
"you_have_been_successfully_logged_out": "You have been successfully logged out",
"unauthorized": "Unauthorized",
"profile_updated_successfully": "Profile Updated Successfully",
"password_updated_successfully": "Password updated successfully",
"token_updated_successfully": "Token updated successfully",
"token_added_successfully": "Token added successfully",
"not_allowed_to_place_order_as_your_account_is_de_activated": "Not allowed to place order as your account is de-activated",
"found_one_or_more_items_in_order_is_not_available_for_order": "Found one or more items in order is not available for order",
"insufficient_wallet_balance": "Insufficient wallet balance",
"something_is_missing_in_your_address": "Something is missing in your address",
"sorry_we_are_not_delivering_on_selected_address": "Sorry, We are not delivering on selected address",
"order_can_not_place_due_to_some_reason_try_again_after_some_time": "Order can not place due to some reason! try again after some time",
"could_not_place_order_try_again": "Could not place order. Try again",
"order_placed_successfully": "Order placed successfully",
"could_not_update_order_status_cancelled_or_returned": "Could not update order status cancelled or returned",
"cannot_return_order_unless_it_is_delivered": "Cannot return order unless it is delivered",
"no_orders_found": "No orders found",
"no_products_found": "No Products found",
"no_items_found": "No item(s) found",
"data_not_found": "Data not Found",
"no_products_available": "No Products available",
"brands": "Brands",
"no_brands_found": "No Brands found",
"click_here_to_upload": "Click Here to Upload",
"drop_files_here_or_click_to_upload": "Drop Files here or click to upload"
}*/





