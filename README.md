# Codeception Email Testing Framework

This framework defines a testing Trait (interface) which allows standardized email testing across various email testing services, such as

* [MailHog] with the [MailHogModule]
* [MailCatcher] with the [MailCatcherModule]
* [Mailtrap] with the [MailtrapModule]

### Available Test Methods
All testing methods are defined in `\Codeception\Email\TestsEmails`.
```
haveEmails()
```
Checks if there are any emails in the inbox
```
haveNumberOfEmails($expected)
```
Checks that the amount of emails in the inbox is exactly $expected
```
dontHaveEmails()
```
Checks that there are no emails in the inbox
```
haveUnreadEmails()
```
Checks that there is at least one unread email
```
haveNumberOfUnreadEmails($expected)
```
Checks that the amount of emails in the unread inbox is exactly $expected
```
dontHaveUnreadEmails()
```
Checks that there are no unread emails in the inbox
```
seeInOpenedEmailBody($expected)
```
Validates that $expected can be found in the opened email body
```
seeInOpenedEmailSubject($expected)
```
Validates that $expected can be found in the opened email subject
```
dontSeeInOpenedEmailBody($expected)
```
Checks that $expected cannot be found in the opened email body
```
dontSeeInOpenedEmailSubject($expected)
```
Checks that $expected cannot be found in the opened email subject
```
seeInEmailBody($email, $expected)
```
Checks that the body of $email contains $expected
```
dontSeeInEmailBody($email, $expected)
```
Checks that the body of $email does not contain $expected
```
seeInEmailSubject($email, $expected)
```
Checks that the subject of $email contains $expected
```
dontSeeInEmailSubject($email, $expected)
```
Checks that the subject of $email does not contain $expected
```
seeInOpenedEmailSender($expected)
```
Checks if the sender of the opened email contains $expected
```
dontSeeInOpenedEmailSender($expected)
```
Checks if the sender of the opened email does not contain $expected
```
seeInEmailSender($email, $expected)
```
Checks if the sender of $email contains $expected
```
dontSeeInEmailSender($email, $expected)
```
Checks if the sender of $email does not contain $expected
```
seeInOpenedEmailRecipients($expected)
```
Checks that the recipients of the opened email contain $expected
```
dontSeeInOpenedEmailRecipients($expected)
```
Checks that the recipients of the opened email do not contain $expected
```
seeInEmailRecipients($email, $expected)
```
Checks that the recipients of $email contain $expected
```
dontSeeInEmailRecipients($email, $expected)
```
Checks that the recipients of $email do not contain $expected
```
seeInOpenedEmailToField($expected)
```
Checks the the To field of the opened email contains $expected
```
dontSeeInOpenedEmailToField($expected)
```
Checks the the To field of the opened email does not contain $expected
```
seeInEmailToField($email, $expected)
```
Checks the the To field of $email contains $expected
```
dontSeeInEmailToField($email, $expected)
```
Checks the the To field of $email does not contain $expected
```
seeInOpenedEmailCCField($expected)
```
Checks that the CC field of the opened email contains $expected
```
dontSeeInOpenedEmailCCField($expected)
```
Checks that the CC field of the opened email does not contain $expected
```
seeInEmailCCField($email, $expected)
```
Checks that the CC field of $email contains $expected
```
dontSeeInEmailCCField($email, $expected)
```
Checks that the CC field of $email does not contain $expected
```
seeInOpenedEmailBCCField($expected)
```
Checks that the BCC field of the opened email contains $expected

Warning: it is possible for an email to have its BCC field empty, it doesn't mean that another instance of the same email doesn't exist.
```
dontSeeInOpenedEmailBCCField($expected)
```
Checks that the BCC field of the opened email does not contain $expected

Warning: it is possible for an email to have its BCC field empty, it doesn't mean that another instance of the same email doesn't exist.
```
seeInEmailBCCField($email, $expected)
```
Checks that the BCC field of $email contains $expected

Warning: it is possible for an email to have its BCC field empty, it doesn't mean that another instance of the same email doesn't exist.
```
dontSeeInEmailBCCField($email, $expected)
```
Checks that the BCC field of $email does not contain $expected

Warning: it is possible for an email to have its BCC field empty, it doesn't mean that another instance of the same email doesn't exist.

### Developing For New Testing Services
A base trait defining the interface the test methods require is available in `\Codeception\Email\EmailServiceProvider`. All of these methods need to be overloaded in a new Service Provider.  They are protected as they are only used by the testing layer, not by the user himself.
```
getCurrentInbox()
```
Returns the complete current inbox
```
getUnreadInbox()
```
Returns the inbox containing unread emails
```
getOpenedEmail($fetchNextUnread = FALSE)
```
Main method called by the tests, providing either the currently open email or the next unread one
```
getEmailBody($email)
```
Returns the body of an email
```
getEmailSubject($email)
```
Returns the subject of an email
```
getSender($email)
```
Returns the string containing the sender of the email
```
getEmailTo($email)
```
Returns the string containing the persons included in the To field
```
getEmailCC($email)
```
Returns the string containing the persons included in the CC field
```
getEmailBCC($email)
```
Returns the string containing the persons included in the BCC field
```
getEmailRecipients($email)
```
Returns the string containing all of the recipients, such as To, CC and if provided BCC

### To Do
While this framework should be sufficient for most email testing scenarios, the remaining features need to be implemented
* HTML and Plain Text content
* Attachments
* Priority
 
### License
Copyright (c) 2015 Eric Martel, http://github.com/ericmartel <emartel@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

   [MailHog]: https://github.com/mailhog/MailHog
   [MailCatcher]: http://mailcatcher.me/
   [Mailtrap]: https://mailtrap.io/
   [MailHogModule]: http://github.com/ericmartel/codeception-email-mailhog
   [MailCatcherModule]: http://github.com/ericmartel/codeception-email-mailcatcher
   [MailtrapModule]: http://github.com/ericmartel/codeception-email-mailtrap
   

