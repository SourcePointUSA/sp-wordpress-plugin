<img src="/images/logo.png" width=25%>

# Sourcepoint CMP WordPress Plugin

The Sourcepoint CMP WordPress plugin integrates a consent message experience configured within the Sourcepoint portal into your WordPress site. This plugin helps you manage and comply with GDPR, CCPA, and other privacy regulations by providing an easy-to-use interface for obtaining and managing user consent.

- [Install Sourcepoint CMP WordPress Plugin](#install-sourcepoint-cmp-wordpress-plugin)
- [Configure Sourcepoint CMP WordPress Plugin](#configure-sourcepoint-cmp-wordpress-plugin)
- [FAQs](#faqs)

> The following sections assume that you have configured the necessary vendor lists, messages and other campaign entities for your web property within the Sourcepoint portal. [Click here](https://docs.sourcepoint.com/hc/en-us) to visit the Sourcepoint help center for more information.

## Install Sourcepoint CMP WordPress Plugin

The plugin supports two installation methods:

- [WordPress Dashboard](#wordpress-dashboard)
- [Manually](#manually)

### WordPress Dashboard

From your organization's WordPress dashboard, perform the following:

1. Navigate to **Plugins** and select **Add New**
2. Use provided search field to search for **Sourcepoint CMP**
3. Locate the Sourcepoint CMP WordPress plugin on the subsequent page and click **Install Now**
4. Select **Activate**

### Manually

To manually install the plugin using SFTP (secure FTP):

1. Navigate to the [WordPress repository](https://wordpress.org/plugins/)
2. Use provided search field to search for **Sourcepoint CMP**
3. Select the Sourcepoint CMP WordPress plugin on the subsequent page
4. Click **Download Version x.x**. This will download the latest .zip version of the plugin onto your local machine
5. Unzip the plugin
6. Use your SFTP client to upload the Sourcepoint CMP WordPress plugin directory into the `public/wp-consent/plugins director`

## Configure Sourcepoint CMP WordPress Plugin

> Ensure that your organization has configured the necessary vendor list(s) and campaign entities for your web property within the Sourcepoint portal before saving your configuration. [Click here](https://docs.sourcepoint.com/hc/en-us) to visit the Sourcepoint help center for more information.

Once the Sourcepoint CMP WordPress plugin is installed, navigate to **Plugins** and click **Installed Plugins**. Locate the Sourcepoint CMP WordPress plugin and click **Settings** to customize the configuration.

From the subsequent page your organization can enter its account information and campaign message types. Please refer to the table below for each available field:

| Field           | Description                                                                                                                                                                                                                                                                                                                                                                                                                               |
| --------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Account Number  | The account number value associates the property with your organization's Sourcepoint account. Your organization's account number can be retrieved by contacting your Sourcepoint Account Manager or via the My Account page in your Sourcepoint account.                                                                                                                                                                                 |
| propertyHref    | Maps the implementation to a specific URL as set up in the Sourcepoint account dashboard. [Click here](https://docs.sourcepoint.com/hc/en-us/articles/8938401981843-Best-practices-propertyHref) for more information and best practices.                                                                                                                                                                                                 |
| enable joinHref | When enabled, will ensure that all directory regular expression functionality works in conjunction with the propertyHref parameter. The joinHref parameter is solely used to test your implementation across different servers while still allowing for URL RegEx matching. For these reasons, Sourcepoint strongly recommends that joinHref is enabled to ensure full CMP functionality.                                                 |
| propertyID      | Maps the message to a specific property (website, app, OTT) as set up in Sourcepoint account dashboard.                                                                                                                                                                                                                                                                                                                                   |
| baseEndpoint    | The baseEndpoint is a single server endpoint that serves the messaging experience. By default the baseEndpoint is https://cdn.privacy-mgmt.com however it can be changed to a [CNAME first-party subdomain](https://docs.sourcepoint.com/hc/en-us/articles/4405397441043-Configure-subdomain-with-CNAME-DNS-record) to persist first-party cookies on Safari web browser. Leave field blank if your organization is **not** using a CNAME |
| enableGDPR      | Select if your property has a GDPR TCF message campaign configured for the web property.                                                                                                                                                                                                                                                                                                                                                  |
| enableUSNAT     | Select if your property has a U.S. Multi-State Privacy message campaign configured for the web property.                                                                                                                                                                                                                                                                                                                                  |
| enable CCPA     | Select if your property has a U.S. Privacy (Legacy) message campaign configured for the web property.                                                                                                                                                                                                                                                                                                                                     |

> Your organization will need to set a value for **either** `propertyHref` or `propertyID` but **not both**. [Click here](https://docs.sourcepoint.com/hc/en-us/articles/8938401981843-Best-practices-propertyHref#h_01GB81HYASFG9GJ4Q3GR0VSQK2) for more information.

Click **Save Changes** when finished. Sourcepoint's tags will be added to your webpage and your consent message experience will be delivered in accordance with your scenario configuration.

## FAQs

#### Is the Sourcepoint CMP WordPress plugin compatible with all themes?

This plugin should be compatible with most WordPress themes. However, if you encounter an issue, please contact the Sourcepoint support team.

---

Contributors: Sourcepoint (Atanur Demirci)<br>
Donate link: https://sourcepoint.com/<br>
Tags: cmp<br>
Requires at least: 3.0.1<br>
Tested up to: 6.5.4<br>
Stable tag: 1.0.0<br>
License: GPLv2 or later<br>
License URI: http://www.gnu.org/licenses/gpl-2.0.html
