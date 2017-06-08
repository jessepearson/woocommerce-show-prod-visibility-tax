# WooCommerce Show product_visibility Taxonomy
Makes the product_visibility taxonomy in WooCommerce visible to edit

### Why
This plugin exists due to there can be a hiccup that causes `product_visibility` taxonomy terms to be created twice in WooCommerce 3.0. When active, these terms then become editable and the duplicates can then be removed. 

### Symptoms
* product archive pages display less products than the count states. Example, *Showing 1-12 of 100*, but only 5 products are displayed.
* counts in archives are far off from the actual count of products

### Fix
1. Install plugin and activate
1. Navigate to site_domain.com/wp-admin/edit-tags.php?taxonomy=product_visibility&post_type=product
1. Remove duplicates

Duplicates indicated by checked boxes:
![](http://cld.wthms.co/NRV6K+)
Image Link: http://cld.wthms.co/NRV6K