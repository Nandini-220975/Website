import re
#Q1)
pattern=r'(\d\d\d)-(\d\d\d-\d\d\d)'
text="if you have an queries please contact 123-456-7890"
match=re.search(pattern,text)
if match:
    print("full match:", match.group(0))
    print("group1:",match.group(1))
    print("group 2:",match.group(2))
else:
    print("no match found")
#Q2)
pattern=r'https?://\S+'
text=" Visit http://example.com for details.secure site: https://openai.com . This should not match: ftp://files.com"
matches=re.findall(pattern,text)
print(matches)
for url in matches:
    print(url)
#Q3)
text="the exam was on 3/14/2015 and the deadline is 2016/5/16 or 08-26-2017."
pattern=r'\b(\d{1,4})[/-](\d{1,2})[/-](\d{1,4})\b'
dates=re.findall(pattern,text)
print(dates)
for d in dates:
    a,b,c=d
    if len(a)==4:
        year,month,day=a,b,c
    else:
        month,day,year=a,b,c
    print(f"{year}-{month.zfill(2)}-{day.zfill(2)}")

#Q4)
pattern=r'(?<! [\d])\d{1,3}(?:,\d{3})*(?!\d)'
text="there are some values 42, 1,234 and 6,356,789 and 12,23,345 and 1234 to be calculated"
matches=re.findall(pattern,text)
print("valid numbers found:")
for m in matches:
    print(m)

#Q5)
pattern=r'[A-Z][a-zA-Z]* Nakamoto$'
tests=[ 'Satoshi Nakamoto', 'Alice Nakamoto' ,'RoboCop Nakamoto' ,'satoshi Nakamoto','Mr. Nakamoto', 'Nakamoto' ,'Satoshi nakamoto']
for name in tests:
    if re.match(pattern,name):
        print(name,"-> Match")
    else:
        print(name,"-> No Match")
#Q6)
pattern=r'^(Alice|Bob|Carol) (eats|pets|throws) (apples|cats|baseballs)\.$'
tests=["Alice eats apples.",
       "Bob pets cats.",
       "Carol throws baseballs.",
       "Alice throws Apples.",
       "BOB EATS CATS.",
       "robocop eats apples.",
       "ALICE THROWS FOOTBALLS.",
       "carol eats 7 cats."]
for sentence in tests:
    print(sentence,"->",bool(re.match(pattern,sentence,re.IGNORECASE))
#Q7)
def is_strong_password(password):
    if len(password)<8:
        return False
    if not re.search(r'[A-Z]',password):
        return False
    if not re.search(r'[a-z]',password):
        return False
    if not re.search(r'\d',password):
        return False
    return True
passwords=[
    "Password1",
    "password1",
    "PASSWORD1",
    "PASS1",
    "Strongpass9"
    ]
for pwd in passwords:
    print(pwd,"->",is_strong_password(pwd))
    









    
