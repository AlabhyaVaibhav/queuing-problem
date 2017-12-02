import pandas as pd

xls = pd.ExcelFile("Bhubaneswar_Regd_23_Oct.xls")

sheetX = xls.parse(1)

var1 = sheetX['ColumnName']

print(var1[1])