# get the pickID and userID from the template table

INSERT INTO template_scores (pickID, userID)
SELECT template.pickID, template.userID
FROM template;

# set an initial score for all players

UPDATE template_scores
SET template_scores.score = 10000;

# subtract a large penalty from the scores of the players who picked the winner(s) wrong
# penalty should be 5000/(number of picks in the set)

UPDATE template_scores, template_gbg
SET template_scores.score = (template_scores.score - 1000)
WHERE template_scores.pickID = template_gbg.pickID
AND template_gbg.winner1 = 0;

UPDATE template_scores, template_gbg
SET template_scores.score = (template_scores.score - 1000)
WHERE template_scores.pickID = template_gbg.pickID
AND template_gbg.winner2 = 0;

UPDATE template_scores, template_gbg
SET template_scores.score = (template_scores.score - 1000)
WHERE template_scores.pickID = template_gbg.pickID
AND template_gbg.winner3 = 0;

UPDATE template_scores, template_gbg
SET template_scores.score = (template_scores.score - 1000)
WHERE template_scores.pickID = template_gbg.pickID
AND template_gbg.winner4 = 0;

UPDATE template_scores, template_gbg
SET template_scores.score = (template_scores.score - 1000)
WHERE template_scores.pickID = template_gbg.pickID
AND template_gbg.winner5 = 0;

# subtract an additional penalty from the scores of players based on how far their predicted spread was from the actual spread

UPDATE template_scores, template_gbg
SET template_scores.score = (template_scores.score - (template_gbg.spread1 * 5))
WHERE template_scores.pickID = template_gbg.pickID;

UPDATE template_scores, template_gbg
SET template_scores.score = (template_scores.score - (template_gbg.spread2 * 5))
WHERE template_scores.pickID = template_gbg.pickID;

UPDATE template_scores, template_gbg
SET template_scores.score = (template_scores.score - (template_gbg.spread3 * 5))
WHERE template_scores.pickID = template_gbg.pickID;

UPDATE template_scores, template_gbg
SET template_scores.score = (template_scores.score - (template_gbg.spread4 * 5))
WHERE template_scores.pickID = template_gbg.pickID;

UPDATE template_scores, template_gbg
SET template_scores.score = (template_scores.score - (template_gbg.spread5 * 5))
WHERE template_scores.pickID = template_gbg.pickID;

# calculate the grade based on how close their final score was to the initial score
# they can only achieve a perfect score by picking the winner and exact spread of every game

UPDATE template_scores
SET template_scores.grade = (template_scores.score / 100);