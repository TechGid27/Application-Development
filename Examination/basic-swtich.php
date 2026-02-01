<!-- 
 
TASK 1 to 50

-->

<!-- Basic switch 
1. Day of week
$day = 3;
switch ($day) {
    case 1: echo "Monday"; break;
    case 2: echo "Tuesday"; break;
    case 3: echo "Wednesday"; break;
    default: echo "Invalid day";
}

Answer : Was case 3 "Wednesday"


2. Grade
$grade = 'A';
switch ($grade) {
    case 'A': echo "Excellent"; break;
    case 'B': echo "Good"; break;
    case 'C': echo "Average"; break;
    default: echo "Fail";
}

Answer : Was case 'A' "Excellent"


3. Traffic light
$light = "red";
switch ($light) {
    case "red": echo "Stop"; break;
    case "yellow": echo "Ready"; break;
    case "green": echo "Go"; break;
}

Answer : Was case "red" "Stop"

4. Month name
$month = 2;
switch ($month) {
    case 1: echo "January"; break;
    case 2: echo "February"; break;
}

Answer : was case 2 "February"

5. Simple calculator
$a = 10; $b = 5; $op = '+';
switch ($op) {
    case '+': echo $a + $b; break;
    case '-': echo $a - $b; break;
}

Answer : was '+' echo 15 because it echo $a + $b it is sum

6. User role
$role = "admin";
switch ($role) {
    case "admin": echo "Full access"; break;
    case "editor": echo "Edit access"; break;
    default: echo "View only";
}

Answer : was case "Admin" echo " Full access"

7. Gender
$gender = "F";
switch ($gender) {
    case "M": echo "Male"; break;
    case "F": echo "Female"; break;
}

Answer : was case "F" echo "Female"

8. HTTP status
$code = 404;
switch ($code) {
    case 200: echo "OK"; break;
    case 404: echo "Not Found"; break;
}

Answer : case 404 because the value of $code it was 404 "Not Found"

9. Menu selection
$choice = 1;
switch ($choice) {
    case 1: echo "Pizza"; break;
    case 2: echo "Burger"; break;
}
Answer : case 1 "Pizza" because the value of choice it was 1

10. Boolean
$status = true;
switch ($status) {
    case true: echo "Active"; break;
    case false: echo "Inactive"; break;
}

Answer : case true "Active" because value of the $status it was true

11. Fruit price
$fruit = "apple";
switch ($fruit) {
    case "apple": echo "$2"; break;
    case "banana": echo "$1"; break;
}

Answer : case "apple" echo "$2" it still $2 because was string
12. Season
$season = "winter";
switch ($season) {
    case "summer": echo "Hot"; break;
    case "winter": echo "Cold"; break;
}

Answer : case "winter" echo "Cold"

13. Device type
$device = "mobile";
switch ($device) {
    case "mobile": echo "Small screen"; break;
    case "desktop": echo "Large screen"; break;
}

Answer : case "mobile" echo "Small screen"

14. Payment method
$pay = "card";
switch ($pay) {
    case "cash": echo "Cash payment"; break;
    case "card": echo "Card payment"; break;
}

Answer : case "card" echo "Card payment"

15. Language
$lang = "php";
switch ($lang) {
    case "php": echo "Backend"; break;
    case "js": echo "Frontend"; break;
}

Answer : case "php" echp "Backend" because the value of $lang is "php"

16. Weather
$weather = "rain";
switch ($weather) {
    case "rain": echo "Take umbrella"; break;
    case "sun": echo "Wear sunglasses"; break;
}

Answer : case "rain" echo "Take umbrella"


17. Order status
$status = "shipped";
switch ($status) {
    case "pending": echo "Waiting"; break;
    case "shipped": echo "On the way"; break;
}

Answer : case "shipped" echo "On the way"

18. Exam result
$result = "pass";
switch ($result) {
    case "pass": echo "Congrats"; break;
    case "fail": echo "Try again"; break;
}

Answer : Congrats

19. Currency
$currency = "USD";
switch ($currency) {
    case "USD": echo "Dollar"; break;
    case "EUR": echo "Euro"; break;
}

Answer : Dollar

20. File type
$file = "pdf";
switch ($file) {
    case "pdf": echo "Document"; break;
    case "jpg": echo "Image"; break;
}

Answer : Document

🔹 Nested switch examples (21–35)
21. Country → City
$country = "USA";
$city = "NY";

switch ($country) {
    case "USA":
        switch ($city) {
            case "NY": echo "New York"; break;
            case "LA": echo "Los Angeles"; break;
        }
        break;
}

Answer : New York

22. User role + status
$role = "admin";
$status = "active";

switch ($role) {
    case "admin":
        switch ($status) {
            case "active": echo "Admin active"; break;
        }
}

Answer : Admin active

23. Exam → Grade
$exam = "math";
$grade = "A";

switch ($exam) {
    case "math":
        switch ($grade) {
            case "A": echo "Excellent"; break;
        }
}

Answer : Excellent

24. Device → OS
$device = "phone";
$os = "android";

switch ($device) {
    case "phone":
        switch ($os) {
            case "android": echo "Android phone"; break;
        }
}

Answer : Android Phone

25. Payment → Bank
$method = "bank";
$bank = "chase";

switch ($method) {
    case "bank":
        switch ($bank) {
            case "chase": echo "Chase Bank"; break;
        }
}

Answer : Cahse Bank

26. Vehicle → Fuel
$vehicle = "car";
$fuel = "petrol";

switch ($vehicle) {
    case "car":
        switch ($fuel) {
            case "petrol": echo "Petrol car"; break;
        }
}

Answer : Petrol Car

27. Course → Level
$course = "PHP";
$level = "beginner";

switch ($course) {
    case "PHP":
        switch ($level) {
            case "beginner": echo "PHP Basics"; break;
        }
}

Answer : Php basics

28. App → Mode
$app = "game";
$mode = "easy";

switch ($app) {
    case "game":
        switch ($mode) {
            case "easy": echo "Easy Mode"; break;
        }
}

Answer : Easy mode

29. Account → Plan
$type = "premium";
$plan = "yearly";

switch ($type) {
    case "premium":
        switch ($plan) {
            case "yearly": echo "Yearly Premium"; break;
        }
}

Answer : Yearly Premium

30. School → Class
$school = "high";
$class = 10;

switch ($school) {
    case "high":
        switch ($class) {
            case 10: echo "Grade 10"; break;
        }
}

Answer : Grade 10

31. Food → Size
$food = "pizza";
$size = "large";

switch ($food) {
    case "pizza":
        switch ($size) {
            case "large": echo "Large Pizza"; break;
        }
}

Answer : Large Pizza

32. Ticket → Priority
$ticket = "support";
$priority = "high";

switch ($ticket) {
    case "support":
        switch ($priority) {
            case "high": echo "Urgent"; break;
        }
}

Answer : Urgent

33. Game → Character
$game = "RPG";
$char = "mage";

switch ($game) {
    case "RPG":
        switch ($char) {
            case "mage": echo "Magic user"; break;
        }
}

Answer : Magic user

34. OS → Version
$os = "Windows";
$version = 11;

switch ($os) {
    case "Windows":
        switch ($version) {
            case 11: echo "Windows 11"; break;
        }
}

Answer : Windows 11

35. Shop → Category
$shop = "electronics";
$item = "phone";

switch ($shop) {
    case "electronics":
        switch ($item) {
            case "phone": echo "Smartphone"; break;
        }
}

Answer : Smartphone

🔹 switch(true) (range & condition style) (36–50)
36. Age check
$age = 20;
switch (true) {
    case $age < 18: echo "Minor"; break;
    case $age >= 18: echo "Adult"; break;
}

Answer : Adult


37. Score
$score = 85;
switch (true) {
    case $score >= 90: echo "A"; break;
    case $score >= 80: echo "B"; break;
}

Answer : B

38. Salary
$salary = 5000;
switch (true) {
    case $salary < 3000: echo "Low"; break;
    default: echo "High";
}

Answer : High

39. Temperature
$temp = 30;
switch (true) {
    case $temp > 35: echo "Very hot"; break;
    case $temp > 25: echo "Warm"; break;
}

Answer : Warm

40. Login attempts
$attempts = 5;
switch (true) {
    case $attempts > 3: echo "Blocked"; break;
}

Answer : Blocked

41. Battery level
$battery = 15;
switch (true) {
    case $battery < 20: echo "Low battery"; break;
}

Answer : Low battery

42. Speed
$speed = 120;
switch (true) {
    case $speed > 100: echo "Overspeed"; break;
}

Answer : Overspeed


43. File size
$size = 8;
switch (true) {
    case $size > 5: echo "Large file"; break;
}

Answer : True case $size echo "Large file" because value of $size is greater than to 5

44. Experience
$years = 3;
switch (true) {
    case $years < 2: echo "Junior"; break;
    case $years < 5: echo "Mid"; break;
}

Answer : was case $years < 5 echo "Mid" because the value of $years is 3 less than to 5

45. Order amount
$total = 150;
switch (true) {
    case $total > 100: echo "Free delivery"; break;
}

Answer :True echo "Free Delivery"

46. Password length
$len = 6;
switch (true) {
    case $len < 8: echo "Weak"; break;
}

Answer : True echo "Weak"

47. Time of day
$hour = 22;
switch (true) {
    case $hour >= 18: echo "Evening"; break;
}

Answer : True echo "Evening" because value of $hour is greater to equal to 18

48. Internet speed
$speed = 10;
switch (true) {
    case $speed < 5: echo "Slow"; break;
    default: echo "Fast";
}

Answer : Default echo "Fast" because the $speed value is 10 then 

49. Stock quantity
$qty = 0;
switch (true) {
    case $qty == 0: echo "Out of stock"; break;
}

Answer : True

50. Discount
$price = 200;
switch (true) {
    case $price > 150: echo "20% off"; break;
} 

Answer : true echo "20% off" because $price value is greater than on 150


DONE some of my questions is directly answered

-->
