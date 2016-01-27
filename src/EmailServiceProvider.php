<?php

/*
 * This file is part of the Email test framework for Codeception.
 * (c) 2015-2016 Eric Martel
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Codeception\Email;

trait EmailServiceProvider
{
  /**
   * Get Current Inbox
   *
   * Returns the complete current inbox
   *
   * @return array Current Inbox
   */
  protected function getCurrentInbox() 
  {
    $this->fail("Service Provider doesn't implement getCurrentInbox");
  }

  /**
   * Get Unread Inbox
   *
   * Returns the inbox containing unread emails
   *
   * @return array Unread Inbox
   */
  protected function getUnreadInbox()
  {
    $this->fail("Service Provider doesn't implement getUnreadInbox");
  }

  /**
   * Get Opened Email
   *
   * Main method called by the tests, providing either the currently open email or the next unread one
   *
   * @param bool $fetchNextUnread Goes to the next Unread Email
   * @return mixed Returns a JSON encoded Email
   */
  protected function getOpenedEmail($fetchNextUnread = FALSE)
  {
    $this->fail("Service Provider doesn't implement getOpenedEmail");
  }

  /**
   * Get Email Body
   *
   * Returns the body of an email
   *
   * @param mixed $email Email
   * @return string Body
   */
  protected function getEmailBody($email)
  {
    $this->fail("Service Provider doesn't implement getEmailBody");
  }

  /**
   * Get Email Subject
   *
   * Returns the subject of an email
   *
   * @param mixed $email Email
   * @return string Subject
   */
  protected function getEmailSubject($email)
  {
    $this->fail("Service Provider doesn't implement getEmailSubject");
  }

  /**
   * Get Email Sender
   *
   * Returns the string containing the sender of the email
   *
   * @param mixed $email Email
   * @return string Sender
   */
  protected function getEmailSender($email)
  {
    $this->fail("Service Provider doesn't implement getEmailSender");
  }

  /**
   * Get Email Reply To
   *
   * Returns the string containing the address to reply to
   *
   * @param mixed $email Email
   * @return string ReplyTo
   */
  protected function getEmailReplyTo($email)
  {
    $this->fail("Service Provider doesn't implement getEmailReplyTo");
  }

  /**
   * Get Email To
   *
   * Returns the string containing the persons included in the To field
   *
   * @param mixed $email Email
   * @return string To
   */
  protected function getEmailTo($email)
  {
    $this->fail("Service Provider doesn't implement getEmailTo");
  }

  /**
   * Get Email CC
   *
   * Returns the string containing the persons included in the CC field
   *
   * @param mixed $email Email
   * @return string CC
   */
  protected function getEmailCC($email)
  {
    $this->fail("Service Provider doesn't implement getEmailCC");
  }

  /**
   * Get Email BCC
   *
   * Returns the string containing the persons included in the BCC field
   *
   * @param mixed $email Email
   * @return string BCC
   */
  protected function getEmailBCC($email)
  {
    $this->fail("Service Provider doesn't implement getEmailBCC");
  }

  /**
   * Get Email Recipients
   *
   * Returns the string containing all of the recipients, such as To, CC and if provided BCC
   *
   * @param mixed $email Email
   * @return string Recipients
   */
  protected function getEmailRecipients($email)
  {
    $this->fail("Service Provider doesn't implement getEmailRecipients");
  }

  /**
   * Get Email Priority
   * 
   * Returns the priority of the email
   * 
   * @param mixed $email Email
   * @return string Priority
   */
  protected function getEmailPriority($email)
  {
    $this->fail("Service Provider doesn't implement getEmailPriority");
  }
}
