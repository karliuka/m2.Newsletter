# Magento2 Newsletter

Extension include a List-Unsubscribe header in your newsletter emails.

It will reduce complaints because your recipients will be able to easily and reliably unsubscribe if they want to. Frustrated users are likely to hit the "Report Spam" button or complain in some other way about the email that they requested, hurting your sender reputation. 

## Install with Composer as you go

1. Go to Magento2 root folder

2. Enter following commands to install module:

    ```bash
    composer require faonni/module-newsletter
    ```
   Wait while dependencies are updated.

3. Enter following commands to enable module:

    ```bash
	php bin/magento setup:upgrade
	php bin/magento setup:di:compile
	php bin/magento setup:static-content:deploy  (optional)

