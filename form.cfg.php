<?php exit(0); ?> { 
"settings":
{
	"data_settings" : 
	{
		"save_database" : 
		{
			"database" : "",
			"is_present" : false,
			"password" : "",
			"port" : 3306,
			"server" : "",
			"tablename" : "",
			"username" : ""
		},
		"save_file" : 
		{
			"filename" : "form-results.csv",
			"is_present" : false
		},
		"save_sqlite" : 
		{
			"database" : "1.dat",
			"is_present" : false,
			"tablename" : "1"
		}
	},
	"email_settings" : 
	{
		"auto_response_message" : 
		{
			"custom" : 
			{
				"body" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head><title>You got mail!</title></head>\n<body style=\"height:195px; background-color: #f9f9f9; font-family: Helvetica, Arial;\"><div style=\"height:100%; text-align:center;\"><h1 style=\"line-height:195px; font-size: 15px !important; color: #cccccc !important; margin: 0px;\">Please select an email template</h1</div>\n</body>\n</html>\n",
				"is_from_red" : false,
				"is_present" : true,
				"key" : "",
				"subject" : "Thank you for your submission"
			},
			"from" : "",
			"is_present" : false,
			"to" : ""
		},
		"notification_message" : 
		{
			"bcc" : "",
			"cc" : "",
			"custom" : 
			{
				"body" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head><title>You got mail!</title></head>\n<body style=\"height:195px; background-color: #f9f9f9; font-family: Helvetica, Arial;\"><div style=\"height:100%; text-align:center;\"><h1 style=\"line-height:195px; font-size: 15px !important; color: #cccccc !important; margin: 0px;\">Please select an email template</h1</div>\n</body>\n</html>\n",
				"is_from_red" : false,
				"is_present" : true,
				"key" : "",
				"subject" : "Somebody filled out your form!"
			},
			"from" : "",
			"is_present" : false,
			"replyto" : "",
			"to" : ""
		}
	},
	"general_settings" : 
	{
		"colorboxautoenabled" : false,
		"colorboxautotime" : 3,
		"colorboxenabled" : false,
		"colorboxname" : "Default",
		"formname" : "",
		"is_appstore" : "0",
		"timezone" : "Asia/Baghdad"
	},
	"mailchimp" : 
	{
		"apiKey" : "",
		"lists" : []
	},
	"payment_settings" : 
	{
		"confirmpayment" : "<center>\n<style type=\"text/css\">\n#docContainer table {width:80% !important; margin-top: 5px; margin-bottom: 5px;}\n#docContainer td {text-align:right; min-width:25%; font-size: 12px !important; line-height: 20px;margin: 0px;border-bottom: 1px solid #e9e9e9; padding-right:5px;}\n#docContainer td:first-child {text-align:left; font-size: 13px !important; font-weight:bold; vertical-align:text-top; min-width:50%;}\n#docContainer th {font-size: 13px !important; font-weight:bold; vertical-align:text-top; text-align:right; padding-right:5px;}\n#docContainer th:first-child {text-align:left;}\n#docContainer tr:first-child {border-bottom-width:2px; border-bottom-style:solid;}\n#docContainer center {margin-bottom:15px;}\n#docContainer form input { margin:5px; }\n#docContainer #fb_confirm_inline { margin:5px; text-align:center;}\n#docContainer #fb_confirm_inline>center h2 { }\n#docContainer #fb_confirm_inline>center p { margin:5px; }\n#docContainer #fb_confirm_inline>center a { }\n#docContainer #fb_confirm_inline input { border:none; color:transparent; font-size:0px; background-color: transparent; background-repat: no-repeat; }\n#docContainer #fb_paypalwps { background: url('https://coffeecupimages.s3.amazonaws.com/paypal.gif');background-repeat:no-repeat; width:145px; height:42px; }\n#docContainer #fb_authnet { background: url('https://coffeecupimages.s3.amazonaws.com/authnet.gif'); background-repeat:no-repeat; width:135px; height:38px; }\n#docContainer #fb_2checkout { background: url('https://coffeecupimages.s3.amazonaws.com/2co.png'); background-repeat:no-repeat; width:210px; height:44px; }\n#docContainer #fb_invoice { background: url('https://coffeecupimages.s3.amazonaws.com/btn_email.png'); background-repeat:no-repeat; width:102px; height:31px; }\n#docContainer #fb_invoice:hover { background: url('https://coffeecupimages.s3.amazonaws.com/btn_email_hov.png'); }\n#docContainer #fb_goback { color: inherit; }\n</style>\n[_cart_summary_]\n<h2>Almost done! </h2>\n<p>Your order will not be processed until you click the payment button below.</p>\n<a id=\"fb_goback\"href=\"?action=back\">Back to form</a></center>",
		"currencysymbol" : "$",
		"decimals" : 2,
		"fixedprice" : "000",
		"invoicelabel" : "",
		"is_present" : false,
		"paymenttype" : "redirect",
		"shopcurrency" : "USD",
		"usecustomsymbol" : false
	},
	"redirect_settings" : 
	{
		"confirmpage" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head>\n<title>Success!</title>\n<meta charset=\"utf-8\">\n<style type=\"text/css\">\nbody {background: #f9f9f9;padding-left: 11%;padding-top: 7%; padding-right: 2%;max-width:700px;font-family: Helvetica, Arial;}\ntable{width:80% !important;}\np{font-size: 16px;font-weight: bold;color: #666;}\nh1{font-size: 60px !important;color: #ccc !important;margin:0px;}\nh2{font-size: 28px !important;color: #666 !important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;}\nh3{font-size: 16px; color: #a1a1a1; border-top: 1px dotted #00A2FF; padding-top:1.7%; font-weight: bold;}\nh3 span{color: #ccc;}\ntd {font-size: 12px !important; line-height: 30px;  color: #666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\ntd:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:50%; padding-right:5px;}\na:link {color:#666; text-decoration:none;} a:visited {color:#666; text-decoration:none;} a:hover {color:#00A2FF;}\n</style>\n</head>\n<body>\n<h1>Thanks! </h1>\n<h2>The form is on its way.</h2>\n<p>Here&rsquo;s what was sent:</p>\n<div>[_form_results_]</div>\n<!-- link back to your Home Page -->\n<h3>Let&rsquo;s go <span> <a target=\"_blank\" href=\"http://www.coffeecup.com\">Back Home</a></span></h3>\n</body>\n</html>\n",
		"gotopage" : "",
		"inline" : "<center>\n<style type=\"text/css\">\n#docContainer table {margin-top: 30px; margin-bottom: 30px; width:80% !important;}\n#docContainer td {font-size: 12px !important; line-height: 30px;color: #666666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\n#docContainer td:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:50%; padding-right:5px;}\n</style>\n[_form_results_]\n<h2>Thank you!</h2><br/>\n<p>Your form was successfully submitted. We received the information shown above.</p>\n</center>",
		"type" : "inline"
	},
	"uid" : "2ed1c1911cd171d4ed614037a5dcc691",
	"validation_report" : "in_line"
},
"rules":{"code_07704633343":{"label":" &#1603;&#1734;&#1583;&#1740; &#1601;&#1749;&#1585;&#1605;&#1575;&#1606;&#1576;&#1749;&#1585; &#1576;&#1607;&zwnj; &#1574;&#1740;&#1606;&#1711;&#1604;&#1740;&#1586;&#1740;","fieldtype":"text","maxlength":"10","required":true},"dawa_07704633343":{"label":"&#1583;&#1575;&#1608;&#1575;&#1603;&#1575;&#1585;&#1740;","fieldtype":"dropdown","required":true,"values":["","شاند","مۆڵەت","پشتگیری"]},"molat_07704633343":{"label":"&#1580;&#1734;&#1585;&#1740; &#1605;&#1734;&#1717;&#1607;&zwnj;&#1578;","fieldtype":"dropdown","values":["مۆڵەتی ئاسایی","مۆڵەتی دایكانە","مۆڵەتی نەخۆشی","مۆڵەتی خوێندن"]},"sharawani_07704633343":{"label":"&#1588;&#1575;&#1585;&#1607;&zwnj;&#1608;&#1575;&#1606;&#1740;&#1740;&#1607;&zwnj;&#1603;&#1575;&#1606;","fieldtype":"dropdown","required":true,"values":["","سیته‌ك","چوارتا","سه‌رسیر","شوێنی تر"]},"shwentr_07704633343":{"label":"&#1588;&#1608;&#1742;&#1606;&#1740; &#1578;&#1585;","fieldtype":"text","required":true,"maxlength":"50"},"mabast_07704633343":{"label":"&#1576;&#1607;&zwnj; &#1605;&#1607;&zwnj;&#1576;&#1607;&zwnj;&#1587;&#1578;&#1740;","fieldtype":"text","required":true},"wrdakari_07704633343":{"label":"&#1608;&#1608;&#1585;&#1583;&#1749;&#1603;&#1575;&#1585;&#1740;","fieldtype":"textarea","maxlength":"10000"}},
"payment_rules":{"dawa_07704633343":{},"molat_07704633343":{},"sharawani_07704633343":{}},
"conditional_rules":{"molat_07704633343":{"element":{"name":"dawa_07704633343","operator":"is","value":"مۆڵەت"}},"sharawani_07704633343":{"element":{"name":"dawa_07704633343","operator":"is","value":"شاند"}},"shwentr_07704633343":{"element":{"name":"sharawani_07704633343","operator":"is","value":"شوێنی تر"}},"mabast_07704633343":{"element":{"name":"dawa_07704633343","operator":"is","value":"شاند"}}},
"application_version":"Web Form Builder (Windows), build 2.5.5437"
}