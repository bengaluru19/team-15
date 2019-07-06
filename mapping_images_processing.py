# This file is used to map the conditions given in the survey to the playground images to be selected
# crsr is connection to the database
# Output of the file is playground image names

def bounds(area, budget, snake) :   
    if area>0 and area<5000 :
        alb = 0
        ahb = 4999
    elif area>=5000 and area<7000 :
        alb = 5000
        ahb = 6999
    elif area>=7000 and area<10000 :
        alb = 7000
        ahb = 9999
    elif area>=10000 and area<12000 :
        alb = 10000
        ahb = 11999
    else :
        alb = 12000
        ahb = 30000
    if budget>=150000 and budget<200000 :
        blb = 150000
        bhb = 199999
    elif budget>=200000 and budget<250000 :
        blb = 200000
        bhb = 249999
    elif budget>=250000 and budget<500000 :
        blb = 250000
        bhb = 500000
    return alb, ahb, blb, bhb

area = 10500
budget = 260000
snake = 1

alb, ahb, blb, bhb = bounds(area, budget, snake)

crsr.execute("SELECT file_name from Images where (area>=? and area<=?) and (budget>=? and budget<=?)  ", (alb, ahb, blb, bhb))  
  
ans= crsr.fetchall()  
   
if len(ans) == 0 :
    print("Sorry, playground can't be constructed with the given conditions")
else :    
    for i in ans: 
        print(i[0])