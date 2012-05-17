# insert the pickID and userID from the m_c_bball_round2_2011 table
# v1.027 removed clause: WHERE m_c_bball_round2_2011_actual.gameID = 1    not sure why it was ever in there

INSERT INTO m_c_bball_round2_2011_gbg(pickID, userID)
SELECT m_c_bball_round2_2011.pickID, m_c_bball_round2_2011.userID
FROM m_c_bball_round2_2011;

# compare the predicted winners to the actual winners and set m_c_bball_round2_2011_gbg.winner(x) to 0 if the player picked incorrectly

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner1 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner1 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 1;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner2 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner2 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 2;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner3 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner3 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 3;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner4 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner4 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 4;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner5 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner5 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 5;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner6 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner6 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 6;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner7 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner7 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 7;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner8 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner8 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 8;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner9 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner9 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 9;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner10 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner10 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 10;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner11 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner11 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 11;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner12 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner12 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 12;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner13 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner13 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 13;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner14 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner14 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 14;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner15 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner15 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 15;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner16 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner16 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 16;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner17 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner17 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 17;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner18 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner18 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 18;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner19 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner19 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 19;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner20 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner20 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 20;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner21 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner21 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 21;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner22 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner22 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 22;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner23 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner23 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 23;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner24 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner24 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 24;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner25 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner25 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 25;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner26 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner26 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 26;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner27 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner27 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 27;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner28 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner28 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 28;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner29 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner29 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 29;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner30 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner30 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 30;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner31 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner31 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 31;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner32 = 0
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner32 != m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 32;

# compare the predicted winners to the actual winners and set m_c_bball_round2_2011_gbg.winner(x) to 1 if the player picked correctly

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner1 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner1 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 1;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner2 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner2 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 2;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner3 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner3 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 3;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner4 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner4 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 4;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner5 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner5 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 5;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner6 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner6 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 6;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner7 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner7 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 7;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner8 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner8 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 8;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner9 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner9 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 9;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner10 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner10 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 10;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner11 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner11 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 11;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner12 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner12 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 12;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner13 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner13 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 13;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner14 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner14 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 14;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner15 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner15 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 15;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner16 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner16 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 16;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner17 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner17 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 17;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner18 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner18 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 18;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner19 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner19 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 19;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner20 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner20 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 20;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner21 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner21 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 21;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner22 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner22 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 22;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner23 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner23 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 23;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner24 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner24 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 24;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner25 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner25 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 25;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner26 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner26 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 26;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner27 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner27 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 27;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner28 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner28 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 28;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner29 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner29 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 29;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner30 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner30 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 30;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner31 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner31 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 31;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.winner32 = 1
WHERE m_c_bball_round2_2011.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011.winner32 = m_c_bball_round2_2011_actual.winner
AND m_c_bball_round2_2011_actual.gameID = 32;

# Compare the predicted spread to the actual spread. Add m_c_bball_round2_2011.spread(x) to m_c_bball_round2_2011_actual.spread if they picked the winner wrong. Take the absolute value of m_c_bball_round2_2011.spread(x) minus m_c_bball_round2_2011_actual.spread if they picked the winner right.

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread1 = m_c_bball_round2_2011.spread1 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner1 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 1;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread1 = ABS(m_c_bball_round2_2011.spread1 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner1 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 1;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread2 = m_c_bball_round2_2011.spread2 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner2 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 2;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread2 = ABS(m_c_bball_round2_2011.spread2 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner2 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 2;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread3 = m_c_bball_round2_2011.spread3 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner3 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 3;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread3 = ABS(m_c_bball_round2_2011.spread3 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner3 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 3;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread4 = m_c_bball_round2_2011.spread4 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner4 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 4;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread4 = ABS(m_c_bball_round2_2011.spread4 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner4 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 4;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread5 = m_c_bball_round2_2011.spread5 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner5 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 5;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread5 = ABS(m_c_bball_round2_2011.spread5 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner5 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 5;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread6 = m_c_bball_round2_2011.spread6 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner6 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 6;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread6 = ABS(m_c_bball_round2_2011.spread6 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner6 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 6;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread7 = m_c_bball_round2_2011.spread7 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner7 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 7;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread7 = ABS(m_c_bball_round2_2011.spread7 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner7 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 7;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread8 = m_c_bball_round2_2011.spread8 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner8 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 8;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread8 = ABS(m_c_bball_round2_2011.spread8 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner8 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 8;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread9 = m_c_bball_round2_2011.spread9 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner9 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 9;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread9 = ABS(m_c_bball_round2_2011.spread9 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner9 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 9;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread10 = m_c_bball_round2_2011.spread10 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner10 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 10;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread10 = ABS(m_c_bball_round2_2011.spread10 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner10 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 10;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread11 = m_c_bball_round2_2011.spread11 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner11 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 11;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread11 = ABS(m_c_bball_round2_2011.spread11 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner11 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 11;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread12 = m_c_bball_round2_2011.spread12 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner12 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 12;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread12 = ABS(m_c_bball_round2_2011.spread12 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner12 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 12;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread13 = m_c_bball_round2_2011.spread13 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner13 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 13;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread13 = ABS(m_c_bball_round2_2011.spread13 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner13 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 13;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread14 = m_c_bball_round2_2011.spread14 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner14 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 14;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread14 = ABS(m_c_bball_round2_2011.spread14 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner14 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 14;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread15 = m_c_bball_round2_2011.spread15 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner15 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 15;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread15 = ABS(m_c_bball_round2_2011.spread15 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner15 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 15;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread16 = m_c_bball_round2_2011.spread16 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner16 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 16;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread16 = ABS(m_c_bball_round2_2011.spread16 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner16 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 16;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread17 = m_c_bball_round2_2011.spread17 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner17 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 17;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread17 = ABS(m_c_bball_round2_2011.spread17 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner17 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 17;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread18 = m_c_bball_round2_2011.spread18 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner18 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 18;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread18 = ABS(m_c_bball_round2_2011.spread18 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner18 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 18;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread19 = m_c_bball_round2_2011.spread19 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner19 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 19;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread19 = ABS(m_c_bball_round2_2011.spread19 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner19 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 19;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread20 = m_c_bball_round2_2011.spread20 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner20 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 20;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread20 = ABS(m_c_bball_round2_2011.spread20 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner20 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 20;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread21 = m_c_bball_round2_2011.spread21 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner21 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 21;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread21 = ABS(m_c_bball_round2_2011.spread21 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner21 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 21;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread22 = m_c_bball_round2_2011.spread22 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner22 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 22;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread22 = ABS(m_c_bball_round2_2011.spread22 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner22 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 22;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread23 = m_c_bball_round2_2011.spread23 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner23 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 23;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread23 = ABS(m_c_bball_round2_2011.spread23 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner23 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 23;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread24 = m_c_bball_round2_2011.spread24 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner24 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 24;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread24 = ABS(m_c_bball_round2_2011.spread24 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner24 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 24;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread25 = m_c_bball_round2_2011.spread25 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner25 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 25;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread25 = ABS(m_c_bball_round2_2011.spread25 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner25 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 25;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread26 = m_c_bball_round2_2011.spread26 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner26 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 26;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread26 = ABS(m_c_bball_round2_2011.spread26 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner26 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 26;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread27 = m_c_bball_round2_2011.spread27 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner27 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 27;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread27 = ABS(m_c_bball_round2_2011.spread27 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner27 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 27;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread28 = m_c_bball_round2_2011.spread28 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner28 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 28;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread28 = ABS(m_c_bball_round2_2011.spread28 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner28 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 28;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread29 = m_c_bball_round2_2011.spread29 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner29 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 29;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread29 = ABS(m_c_bball_round2_2011.spread29 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner29 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 29;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread30 = m_c_bball_round2_2011.spread30 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner30 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 30;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread30 = ABS(m_c_bball_round2_2011.spread30 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner30 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 30;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread31 = m_c_bball_round2_2011.spread31 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner31 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 31;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread31 = ABS(m_c_bball_round2_2011.spread31 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner31 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 31;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread32 = m_c_bball_round2_2011.spread32 + m_c_bball_round2_2011_actual.spread
WHERE m_c_bball_round2_2011_gbg.winner32 = 0
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 32;

UPDATE m_c_bball_round2_2011_gbg, m_c_bball_round2_2011, m_c_bball_round2_2011_actual
SET m_c_bball_round2_2011_gbg.spread32 = ABS(m_c_bball_round2_2011.spread32 - m_c_bball_round2_2011_actual.spread)
WHERE m_c_bball_round2_2011_gbg.winner32 = 1
AND m_c_bball_round2_2011_gbg.pickID = m_c_bball_round2_2011.pickID
AND m_c_bball_round2_2011_actual.gameID = 32;