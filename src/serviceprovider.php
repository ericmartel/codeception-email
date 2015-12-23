<?php

/*
 * This file is part of the Email test framework for Codeception.
 * (c) 2015 Eric Martel
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
  protected function getCurrentInbox() { }

  /**
   * Get Unread Inbox
   *
   * Returns the inbox containing unread emails
   *
   * @return array Unread Inbox
   */
  protected function getUnreadInbox() { }

  /**
   * Get Opened Email
   *
   * Main method called by the tests, providing either the currently open email or the next unread one
   *
   * @param bool $fetchNextUnread Goes to the next Unread Email
   * @return mixed Returns a JSON encoded Email
   */
  protected function getOpenedEmail($fetchNextUnread = FALSE) {  }

  /**
   * Get Email Body
   *
   * Returns the body of an email
   *
   * @param mixed $email Email
   * @return string Body
   */
  protected function getEmailBody($email) { }

  /**
   * Get Email Subject
   *
   * Returns the subject of an email
   *
   * @param mixed $email Email
   * @return string Subject
   */
  protected function getEmailSubject($email) { }

  /**
   * Get Email Sender
   *
   * Returns the string containing the sender of the email
   *
   * @param mixed $email Email
   * @return string Sender
   */
  protected function getSender($email) { }

  /**
   * Get Email To
   *
   * Returns the string containing the persons included in the To field
   *
   * @param mixed $email Email
   * @return string To
   */
  protected function getEmailTo($email) { }

  /**
   * Get Email CC
   *
   * Returns the string containing the persons included in the CC field
   *
   * @param mixed $email Email
   * @return string CC
   */
  protected function getEmailCC($email) { }

  /**
   * Get Email BCC
   *
   * Returns the string containing the persons included in the BCC field
   *
   * @param mixed $email Email
   * @return string BCC
   */
  protected function getEmailBCC($email) { }

  /**
   * Get Email Recipients
   *
   * Returns the string containing all of the recipients, such as To, CC and if provided BCC
   *
   * @param mixed $email Email
   * @return string Recipients
   */
  protected function getEmailRecipients($email) { }
}