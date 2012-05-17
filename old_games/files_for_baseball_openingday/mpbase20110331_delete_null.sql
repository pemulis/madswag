#####
# This query should delete all of the records from the mpbase20110331 table that have null values in the 
# winner or spread columns. It should be run after the game has been locked out but before 
# comparing mpbase20110331 table with mpbase20110331_actual table to populate mpbase20110331_gbg
#####

DELETE FROM mpbase20110331
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
OR spread15 IS NULL;