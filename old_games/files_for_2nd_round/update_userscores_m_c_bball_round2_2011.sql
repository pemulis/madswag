# This query updates the userscores table to reflect the results of m_c_bball_round2_2011. A similar query should be run after every game. Before running this query, you must run userscores_table_newusers.

UPDATE userscores, m_c_bball_round2_2011_scores
SET userscores.games_played = (userscores.games_played + 1)
WHERE userscores.userID = m_c_bball_round2_2011_scores.userID;

UPDATE userscores, m_c_bball_round2_2011_scores
SET userscores.total_points = (userscores.total_points + m_c_bball_round2_2011_scores.score)
WHERE userscores.userID = m_c_bball_round2_2011_scores.userID;

UPDATE userscores, m_c_bball_round2_2011_scores
SET userscores.grade = ((userscores.total_points / userscores.games_played) / 100)
WHERE userscores.userID = m_c_bball_round2_2011_scores.userID;