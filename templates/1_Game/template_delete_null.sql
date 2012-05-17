#####
# This query should delete all of the records from the template table that have null values in the 
# winner or spread columns. It should be run after the game has been locked out but before 
# comparing template table with template_actual table to populate template_gbg
#####

DELETE FROM template
WHERE winner1 IS NULL
OR spread1 IS NULL;