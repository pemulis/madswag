# This query updates the userscores table to reflect the results of mpbase20110331. A similar query should be run after every game. Before running this query, you must run userscores_table_newusers.

UPDATE userscores, mpbase20110331_scores
SET userscores.games_played = (userscores.games_played + 1)
WHERE userscores.userID = mpbase20110331_scores.userID;

UPDATE userscores, mpbase20110331_scores
SET userscores.total_points = (userscores.total_points + mpbase20110331_scores.score)
WHERE userscores.userID = mpbase20110331_scores.userID;

UPDATE userscores, mpbase20110331_scores
SET userscores.grade = ((userscores.total_points / userscores.games_played) / 100)
WHERE userscores.userID = mpbase20110331_scores.userID;