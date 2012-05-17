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
OR spread8 IS NULL
OR winner9 IS NULL
OR spread9 IS NULL
OR winner10 IS NULL
OR spread10 IS NULL
OR winner11 IS NULL
OR spread11 IS NULL
OR winner12 IS NULL
OR spread12 IS NULL
OR winner13 IS NULL
OR spread13 IS NULL
OR winner14 IS NULL
OR spread14 IS NULL
OR winner15 IS NULL
OR spread15 IS NULL
OR winner16 IS NULL
OR spread16 IS NULL
OR winner17 IS NULL
OR spread17 IS NULL
OR winner18 IS NULL
OR spread18 IS NULL
OR winner19 IS NULL
OR spread19 IS NULL
OR winner20 IS NULL
OR spread20 IS NULL
OR winner21 IS NULL
OR spread21 IS NULL
OR winner22 IS NULL
OR spread22 IS NULL
OR winner23 IS NULL
OR spread23 IS NULL
OR winner24 IS NULL
OR spread24 IS NULL
OR winner25 IS NULL
OR spread25 IS NULL
OR winner26 IS NULL
OR spread26 IS NULL
OR winner27 IS NULL
OR spread27 IS NULL
OR winner28 IS NULL
OR spread28 IS NULL
OR winner29 IS NULL
OR spread29 IS NULL
OR winner30 IS NULL
OR spread30 IS NULL
OR winner31 IS NULL
OR spread31 IS NULL
OR winner32 IS NULL
OR spread32 IS NULL;