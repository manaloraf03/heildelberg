bst-plus-child
==============

A starter Child Theme for BST Plus

Version 1.0

-----

BST Plus is a Bootstrap 3 Starter Theme, for WordPress, with a growing number of built-in add-ons (e.g. navbar dropdown on hover, navbar mega-menu, and WooCommerce support)

Get BST Plus here: [https://github.com/SimonPadbury/bst-plus](https://github.com/SimonPadbury/bst-plus)

-----

**bst-plus-child** contains the minimum requirement for a child theme based off **bst-plus**.

So far, all it has is an enqueue function for the linking the stylesheet `css/bst-child.css` *after* the stylesheets of **bst**.

-----

##Notes

(1.) You can't put your styles in this file (style.css). Put them in css/bst-plus-child.css

(2.) Since downloads of BST Plus from GitHub will be in a folder named 'bst-plus-master', therefore in the CSS comment header above I have put 'Template: bst-plus-master'. If the BST Plus root folder has a different name, then you must make the SAME change to the Template line in the CSS comment above.

(3.) You can make this child theme your own by simply:

(a.) Change the name of the root folder
(b.) Change the name of the stylesheet css/bst-plus-child.css
(c.) In functions.php, do a search-and-replace for these two terms:

     "bst-plus-child" => "your-theme-name"
     "bst_plus_child" => "your_theme_name"

(d.) Change the Theme Name in the CSS comment in this file (style.css)
