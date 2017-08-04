<?php

final class User {

    private $id; ///< Unique identifier for this user or bot
    private $firstName; ///< User‘s or bot’s first name
    private $lastName; ///< Optional. User‘s or bot’s last name
    private $userName; ///< Optional. User‘s or bot’s username
    private $languageCode; ///< Optional. IETF language tag of the user's language

    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getLanguageCode() {
        return $this->languageCode;
    }

    public function toString() {
        return "User{" +
            "id=" + id +
            ", firstName='" + firstName + '\'' +
            ", lastName='" + lastName + '\'' +
            ", userName='" + userName + '\'' +
            ", languageCode='" + languageCode + '\'' +
            '}';
    }
}