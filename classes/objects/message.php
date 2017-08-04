<?php

final class Message
{
    private $messageId; ///< Integer	Unique message identifier
    private $from; ///< Optional. Sender, can be empty for messages sent to channels
    private $date; ///< Optional. Date the message was sent in Unix time
    private $chat; ///< Conversation the message belongs to
    private $forwardFrom; ///< Optional. For forwarded messages, sender of the original message
    private $forwardFromChat; ///< Optional. For messages forwarded from a channel, information about the original channel
    private $forwardDate; ///< Optional. For forwarded messages, date the original message was sent
    private $text; ///< Optional. For text messages, the actual UTF-8 text of the message
        /**
         * Optional. For text messages, special entities like usernames, URLs,
         * bot commands, etc. that appear in the text
         */
    private $entities;
    private $audio; ///< Optional. Message is an audio file, information about the file
    private $document; ///< Optional. Message is a general file, information about the file
    private $photo; ///< Optional. Message is a photo, available sizes of the photo
    private $sticker; ///< Optional. Message is a sticker, information about the sticker
    private $video; ///< Optional. Message is a video, information about the video
    private $contact; ///< Optional. Message is a shared contact, information about the contact
    private $location; ///< Optional. Message is a shared location, information about the location
    private $venue; ///< Optional. Message is a venue, information about the venue
    private $pinnedMessage; ///< Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
    private $newChatMembers; ///< Optional. New members were added to the group or supergroup, information about them (the bot itself may be one of these members)
    private $leftChatMember; ///< Optional. A member was removed from the group, information about them (this member may be bot itself)
    private $newChatTitle; ///< Optional. A chat title was changed to this value
    private $newChatPhoto; ///< Optional. A chat photo was change to this value
    private $deleteChatPhoto; ///< Optional. Informs that the chat photo was deleted
    private $groupchatCreated; ///< Optional. Informs that the group has been created
    private $replyToMessage;
    private $voice; ///< Optional. Message is a voice message, information about the file
    private $caption; ///< Optional. Caption for the document, photo or video, 0-200 characters
        /**
         * Optional. Service message: the supergroup has been created.
         * This field can‘t be received in a message coming through updates,
         * because bot can’t be a member of a supergroup when it is created.
         * It can only be found in reply_to_message
         * if someone replies to a very first message in a directly created supergroup.
         */
    private $superGroupCreated;
        /**
         * Optional. Service message: the channel has been created.
         * This field can‘t be received in a message coming through updates,
         * because bot can’t be a member of a channel when it is created.
         * It can only be found in reply_to_message if someone
         * replies to a very first message in a channel.
         */
    private $channelChatCreated;
        /**
         * Optional. The group has been migrated to a supergroup with the specified identifier.
         * This number may be greater than 32 bits and some programming languages
         * may have difficulty/silent defects in interpreting it.
         * But it smaller than 52 bits, so a signed 64 bit integer or double-precision
         * float type are safe for storing this identifier.
         */
    private $migrateToChatId; ///< Optional. The chat has been migrated to a chat with specified identifier, not exceeding 1e13 by absolute value
        /**
         * Optional. The supergroup has been migrated from a group with the specified identifier.
         * This number may be greater than 32 bits and some programming languages
         * may have difficulty/silent defects in interpreting it.
         * But it smaller than 52 bits, so a signed 64 bit integer or double-precision
         * float type are safe for storing this identifier.
         */
    private $migrateFromChatId; ///< Optional. The chat has been migrated from a chat with specified identifier, not exceeding 1e13 by absolute value
    private $editDate; ///< Optional. Date the message was last edited in Unix time
    private $game; ///< Optional. Message is a game, information about the game
    private $forwardFromMessageId; ///< Optional. For forwarded channel posts, identifier of the original message in the channel
    private $invoice; ///< Optional. Message is an invoice for a payment, information about the invoice.
    private $successfulPayment; ///< Optional. Message is a service message about a successful payment, information about the payment.
    private $videoNote; ///< Optional. Message is a video note, information about the video message

    public function __construct(){
    }

    public function getMessageId(){
        return $this->messageId;
    }

    public function getFrom(){
        return $this->from;
    }

    public function getDate(){
        return date;
    }

    public function getChat(){
        return chat;
    }

    public function getForwardFrom(){
        return forwardFrom;
    }

    public function getForwardDate(){
        return forwardDate;
    }

    public function getText(){
        return text;
    }

    public function getEntities(){

    }

    public function getAudio(){
        return audio;
    }

    public function getDocument(){
        return document;
    }

    public function getPhoto(){
        return photo;
    }

    public function getSticker(){
        return sticker;
    }

    public function getVideo(){
        return video;
    }

    public function getContact(){
        return contact;
    }

    public function getLocation(){
        return location;
    }

    public function getVenue(){
        return venue;
    }

    public function getPinnedMessage(){
        return pinnedMessage;
    }

    public function getNewChatMembers(){
        return newChatMembers;
    }

    public function getLeftChatMember(){
        return leftChatMember;
    }

    public function getNewChatTitle(){
        return newChatTitle;
    }

    public function getNewChatPhoto(){
        return newChatPhoto;
    }

    public function getDeleteChatPhoto(){
        return deleteChatPhoto;
    }

    public function getGroupchatCreated(){
        return groupchatCreated;
    }

    public function getReplyToMessage(){
        return replyToMessage;
    }

    public function getVoice(){
        return voice;
    }

    public function getCaption(){
        return caption;
    }

    public function getSuperGroupCreated(){
        return superGroupCreated;
    }

    public function getChannelChatCreated(){
        return channelChatCreated;
    }

    public function getMigrateToChatId(){
        return migrateToChatId;
    }

    public function getMigrateFromChatId(){
        return migrateFromChatId;
    }

    public function getForwardFromMessageId(){
        return forwardFromMessageId;
    }

    public function isGroupMessage(){
        return chat . isGroupChat();
    }

    public function isUserMessage(){
        return chat . isUserChat();
    }

    public function isChannelMessage(){
        return chat . isChannelChat();
    }

    public function isSuperGroupMessage(){
        return chat . isSuperGroupChat();
    }

    public function getChatId(){
        return chat . getId();
    }

    public function hasText(){
        return text != null && !text . isEmpty();
    }

    public function isCommand(){

    }

    public function hasDocument(){
        return this . document != null;
    }

    public function isReply(){
        return this . replyToMessage != null;
    }

    public function hasLocation(){
        return location != null;
    }

    public function getForwardFromChat(){
        return forwardFromChat;
    }

    public function getEditDate(){
        return editDate;
    }

    public function getGame(){
        return game;
    }

    private function hasGame(){
        return game != null;
    }

    public function hasEntities(){
        return entities != null && !entities . isEmpty();
    }

    public function hasPhoto(){
        return photo != null && !photo . isEmpty();
    }

    public function hasInvoice(){
        return invoice != null;
    }

    public function hasSuccessfulPayment(){
        return successfulPayment != null;
    }

    public function getInvoice(){
        return invoice;
    }

    public function getSuccessfulPayment(){
        return successfulPayment;
    }

    public function getVideoNote(){
        return videoNote;
    }

    public function toString(){
        return "Message{" .
            "messageId=" . $this->messageId .
            ", from=" . $this->from .
            ", date=" . $this->date .
            ", chat=" . $this->chat .
            ", forwardFrom=" . $this->forwardFrom .
            ", forwardFromChat=" . $this->forwardFromChat .
            ", forwardDate=" . $this->forwardDate .
            ", text='" . $this->text . '\'' .
            ", entities=" . $this->entities .
            ", audio=" . $this->audio .
            ", document=" . $this->document .
            ", photo=" . $this->photo .
            ", sticker=" . $this->sticker .
            ", video=" . $this->video .
            ", contact=" . $this->contact .
            ", location=" . $this->location .
            ", venue=" . $this->venue .
            ", pinnedMessage=" . $this->pinnedMessage .
            ", newChatMembers=" . $this->newChatMembers .
            ", leftChatMember=" . $this->leftChatMember .
            ", newChatTitle='" . $this->newChatTitle . '\'' .
            ", newChatPhoto=" . $this->newChatPhoto .
            ", deleteChatPhoto=" . $this->deleteChatPhoto .
            ", groupchatCreated=" . $this->groupchatCreated .
            ", replyToMessage=" . $this->replyToMessage .
            ", voice=" . $this->voice .
            ", caption='" . $this->caption . '\'' .
            ", superGroupCreated=" . $this->superGroupCreated .
            ", channelChatCreated=" . $this->channelChatCreated .
            ", migrateToChatId=" . $this->migrateToChatId .
            ", migrateFromChatId=" . $this->migrateFromChatId .
            ", editDate=" . $this->editDate .
            ", game=" . $this->game .
            ", forwardFromMessageId=" . $this->forwardFromMessageId .
            ", invoice=" . $this->invoice .
            ", successfulPayment=" . $this->successfulPayment .
            ", videoNote=" . $this->videoNote .
            '}';
    }
    }