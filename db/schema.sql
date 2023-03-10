CREATE TABLE users (
     userId INT NOT NULL,
     username VARCHAR(40) NOT NULL,
     PRIMARY KEY (userId)
);
CREATE TABLE messages (
      messageId INT NOT NULL,
      content MEDIUMTEXT NOT NULL,
      amountOfEdits INT DEFAULT NULL,
      parentId INT DEFAULT NULL,
      isReply BOOL DEFAULT FALSE,
      isStarred BOOL DEFAULT FALSE,
      amountOfStars INT DEFAULT NULL,
      isPinnedByRoomOwner BOOL DEFAULT FALSE,
      amountOfStarsAndPins INT DEFAULT NULL,
      hasBeenMoved BOOL DEFAULT FALSE,
      userId INT NOT NULL,
      PRIMARY KEY (messageId),
      FOREIGN KEY (userId) REFERENCES users(userId)
);
