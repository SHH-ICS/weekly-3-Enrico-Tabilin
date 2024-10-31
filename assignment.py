option=True
tax=0.13
a=True

while option:
  if a==True:
    print("Pick a size")
    print("Large  Extra Large")
  s=input()
  if s.lower() == "large" or s.lower() == "extra large":
    s = s.lower()
    option=False
  else:
    print("Not an option! Type large or extra large")
    a=False
option=True
while option:
  print("How many toppings? Enter a number from 1-4")
  t=input()
  try:
    t=int(t)
    if t>0 and t<5:
      option=False
    elif t<1:
      print("Can't have less than 1 topping!")
    else:
      print("Can't have more than 4 toppings!")
  except:
    print("No number given!")
if s=="large":
  s=6
else:
  s=10
if t==1:
  t=1.0
elif t==2:
  t=1.75
elif t==3:
  t=2.5
else:
  t=3.35
st=s+t
c=st*(1+tax)
tax=str(tax*100)+"%"
print("Subtotal: $"+str(round(st,2)))
print("Tax:",tax)
print("Total: $"+str(round(c,2)))