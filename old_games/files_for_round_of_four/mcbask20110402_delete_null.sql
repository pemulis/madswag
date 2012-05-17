#####
# This query should delete all of the records from the m_c_bball_roundof4_2011 table that have null values in the 
# winner or spread columns. It should be run after the game has been locked out but before 
# comparing m_c_bball_roundof4_2011 table with m_c_bball_roundof4_2011_actual table to populate m_c_bball_roundof4_2011_gbg
#####

DELETE FROM m_c_bball_roundof4_2011
WHERE winner1 IS NULL
OR spread1 IS NULL
OR winner2 IS NULL
OR spread2 IS NULL;