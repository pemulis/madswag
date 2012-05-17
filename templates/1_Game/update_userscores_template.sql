# This query updates the userscores table to reflect the results of template. A similar query should be run after every game. Before running this query, you must run userscores_table_newusers.

UPDATE userscores, template_scores
SET userscores.games_played = (userscores.games_played + 1)
WHERE userscores.userID = template_scores.userID;

UPDATE userscores, template_scores
SET userscores.total_points = (userscores.total_points + template_scores.score)
WHERE userscores.userID = template_scores.userID;

UPDATE userscores, template_scores
SET userscores.grade = ((userscores.total_points / userscores.games_played) / 100)
WHERE userscores.userID = template_scores.userID;