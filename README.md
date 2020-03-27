# onlineorders.live

Simple online ordering system, based on help desk software HESK 3


## Installation


#### Install HESK 3 in [yourdomain.com]/order
If your hosting provider offers the Softaculous app installer, HESK 3 can be found there (under ‘Customer Support’).

Otherwise go to [hesk.com](https://www.hesk.com/download.php)
to download the software. Follow their [installation instructions](https://www.hesk.com/knowledgebase/?article=37).

#### Upload the onlineorders.live files 
Use an FTP program. The files go into the root folder of your website.

## Setup

Log in as admin at [yourdomain.com]/order/admin/

### Go to Settings > General 

Under Language, select 'English-Orders', then click 'Save changes'. 

### Go to Tools > Custom Fields

Create a new custom field 'Phone number'. Set it as required for customers, with location: before message. Click 'Save custom field'.

(You may also want to add other custom fields - one that has proven useful is 'Pickup date'.)

### Go to Team

Create at least one 'New team member' account with a 'Staff' role.
Once you have created a team member successfully, make sure to uncheck 'Auto-assign' for the Admin user.

## Customization

After each step, click 'Save changes'.
 
### Go to Settings > General 

Input your store name, web address, your name, email, etc.

### Go to Settings > Help Desk
- In ‘Require subject’, select ‘Hide in customer form’
- Disable attachments

### Go to Settings > Knowledgebase
- Select ‘NO - disable knowledge base’

### Go to Settings > Misc
- under ‘Admin link’, uncheck ‘Display a link to admin panel’

### Edit head.txt
If you want to change the background image, do it here:
```
<!-- Custom code to be included before </head> tag -->
<link rel="shortcut icon" href="../assets/images/no-virus-80x80.png" type="image/x-icon">

<style>
        .main {
            background: url(../assets/images/background-10-8.jpg) no-repeat;
        }
        .cust-help a.header__logo {
		    font-size: 36px;
		    color: #333;
	}
</style>
```

### Edit example.html and save as 'index.html'

The `<body>` tag starts at line 31:

```
31 <body>
32   <section class="header1 cid-rUiCji9lDA" id="header1-3">
33    <div class="mbr-overlay"></div>
34    <div class="container align-left">
35        <div class="title-wrap">
36            <h1 class="mbr-section-title mbr-fonts-style align-center mbr-bold mbr-black display-1">
37                ORDER FROM [YOUR STORE NAME]</h1>
38            <h2 class="mbr-section-subtitle align-center mbr- fonts-style  display-2"><strong>. . . and protect our essential services, while keeping the phone lines free.</strong></h2>
```
## Test

Make sure your setup is working, especially the email notifications. (Sometimes it may take 10-15 minutes for messages to arrive.)

For troubleshooting help, please use the [HESK knowledgebase](https://www.hesk.com/knowledgebase/).
# Using the system

Log in as a team member.

### Go to Orders
That's where you will see a sortable list of new and existing orders. Click on the blue links (tracking ID or Subject) to open an order. You can write a reply, e.g., with a question or with the total amount of the order.

Each order has a status assigned to it; you can choose which are shown in the list by checking or unchecking a status in 'Show orders' at the bottom of the page.

To close out an order, mark it as 'Resolved'.

### Best of luck, and may we all get through this crisis unharmed! 