import xlrd
import mysql.connector

# Open the workbook and define the worksheet
book = xlrd.open_workbook("pytest.xlsx")
sheet = book.sheet_by_name("Sheet1")

# Establish a MySQL connection
mydb = mysql.connector.connect(host="localhost",user="root",passwd="1111",database="testarka")

# Get the cursor, which is used to traverse the database, line by line
cursor = mydb.cursor()

# Create the INSERT INTO sql query
query = """INSERT INTO exx (id, name, address, nostud, age, sarea, sprone, opublic, pvan, scon, pref1, pref2, budget) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"""

# Create a For loop to iterate through each row in the XLS file, starting at row 2 to skip the headers
for r in range(1, sheet.nrows):
    id		= sheet.cell(r,0).value
    name	= sheet.cell(r,1).value
    address	= sheet.cell(r,2).value
    nostud	= sheet.cell(r,3).value
    age		= sheet.cell(r,4).value
    sarea	= sheet.cell(r,5).value
    sprone	= sheet.cell(r,6).value
    opublic	= sheet.cell(r,7).value
    pvan	= sheet.cell(r,8).value
    scon	= sheet.cell(r,9).value
    pref1	= sheet.cell(r,10).value
    pref2	= sheet.cell(r,11).value
    budget	= sheet.cell(r,12).value

    # Assign values from each row
    values = (id, name, address, nostud, age, sarea, sprone, opublic, pvan, scon, pref1, pref2, budget)

    # Execute sql Query
    cursor.execute(query, values)

# Close the cursor
cursor.close()

# Commit the transaction
mydb.commit()

# Close the database connection
mydb.close()

# Print results
print()
print("All Done! Bye, for now.")
print()
columns = str(sheet.ncols)
rows = str(sheet.nrows)
print ("I just imported " + str(columns) + " columns and " + str(rows) + " rows to MySQL!")