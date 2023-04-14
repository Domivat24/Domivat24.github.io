# Domivat24.github.io
Automated website that adds the superadmin user to the list of channels of Zoho Cliq in which they are not present.
# Requirements
-Acces token from Zoho.Cliq with the following scope: ZohoCliq.Channels.UPDATE.
-Json files with the list of users and channels of your organization. Go to your organization settings to export them, select also to export the messages to get the channels.json,
as the option to export only the channels is not shown there.
# Considerations
The access token only lasts for an hour, and the api only accepts 10 requests every minute, so you'll have to generate another token if the list of channels is too heavy.
