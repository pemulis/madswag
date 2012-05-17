#####
# This query should delete all of the records from the template table that have null values in the 
# winner or spread columns. It should be run after the game has been locked out but before 
# comparing template table with template_actual table to populate template_gbg
#####

DELETE FROM template
WHERE winner1 IS NULL
OR spread1 IS NULL
OR winner2 IS NULL
OR spread2 IS NULL
OR winner3 IS NULL
OR spread3 IS NULL
OR winner4 IS NULL
OR spread4 IS NULL
OR winner5 IS NULL
OR spread5 IS NULL
OR winner6 IS NULL
OR spread6 IS NULL
OR winner7 IS NULL
OR spread7 IS NULL
OR winner8 IS NULL
OR spread8 IS NULL;