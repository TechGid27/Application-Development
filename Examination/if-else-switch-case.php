<!-- 1. User role check + switch
if ($isLoggedIn) {
    switch ($role) {
        case 'admin': echo "Admin panel"; break;
        case 'user': echo "User dashboard"; break;
        default: echo "Guest area";
    }
}
2. Age validation + switch
if ($age >= 18) {
    switch ($country) {
        case 'US': echo "Adult in US"; break;
        case 'IN': echo "Adult in India"; break;
    }
} else {
    echo "Minor";
}
3. Grade system
if ($marks >= 40) {
    switch (true) {
        case $marks >= 90: echo "A+"; break;
        case $marks >= 75: echo "A"; break;
        default: echo "B";
    }
} else {
    echo "Fail";
}
4. Login status + device
if ($loggedIn) {
    switch ($device) {
        case 'mobile': echo "Mobile view"; break;
        case 'desktop': echo "Desktop view"; break;
    }
}
5. Payment + method
if ($paymentDone) {
    switch ($method) {
        case 'card': echo "Paid by card"; break;
        case 'upi': echo "Paid by UPI"; break;
    }
} else {
    echo "Payment pending";
}
6. Weather + temperature
if ($weather == 'sunny') {
    switch (true) {
        case $temp > 35: echo "Very hot"; break;
        default: echo "Pleasant";
    }
}
7. Order status
if ($orderPlaced) {
    switch ($status) {
        case 'shipped': echo "On the way"; break;
        case 'delivered': echo "Delivered"; break;
    }
}
8. File upload + type
if ($uploaded) {
    switch ($fileType) {
        case 'jpg': echo "Image file"; break;
        case 'pdf': echo "Document file"; break;
    }
}
9. User access
if ($active) {
    switch ($accessLevel) {
        case 1: echo "Read"; break;
        case 2: echo "Write"; break;
        case 3: echo "Admin"; break;
    }
}
10. Exam result
if ($passed) {
    switch ($division) {
        case 1: echo "First Division"; break;
        case 2: echo "Second Division"; break;
    }
} else {
    echo "Try again";
}

11. Traffic signal + speed
if ($speed > 0) {
    switch ($signal) {
        case 'red': echo "Stop"; break;
        case 'green': echo "Go"; break;
    }
}
12. Subscription check
if ($subscribed) {
    switch ($plan) {
        case 'basic': echo "Basic features"; break;
        case 'pro': echo "All features"; break;
    }
}
13. Discount logic
if ($amount > 1000) {
    switch ($customerType) {
        case 'gold': echo "20% off"; break;
        case 'silver': echo "10% off"; break;
    }
}
14. Language preference
if ($selected) {
    switch ($lang) {
        case 'en': echo "Hello"; break;
        case 'hi': echo "Namaste"; break;
    }
}
15. Shipping
if ($addressValid) {
    switch ($city) {
        case 'Delhi': echo "2 days"; break;
        case 'Mumbai': echo "3 days"; break;
    }
}
16. Online exam
if ($submitted) {
    switch ($score) {
        case $score >= 80: echo "Excellent"; break;
        default: echo "Good";
    }
}
17. Gender + age
if ($age >= 18) {
    switch ($gender) {
        case 'M': echo "Adult male"; break;
        case 'F': echo "Adult female"; break;
    }
}
18. Fuel type
if ($vehicle) {
    switch ($fuel) {
        case 'petrol': echo "Petrol engine"; break;
        case 'diesel': echo "Diesel engine"; break;
    }
}
19. Internet status
if ($connected) {
    switch ($speed) {
        case 'slow': echo "Low speed"; break;
        case 'fast': echo "High speed"; break;
    }
}
20. Exam type
if ($registered) {
    switch ($exam) {
        case 'online': echo "Online exam"; break;
        case 'offline': echo "Offline exam"; break;
    }
}

21. Seat booking
if ($available) {
    switch ($seatType) {
        case 'window': echo "Window seat"; break;
        case 'aisle': echo "Aisle seat"; break;
    }
}
22. App mode
if ($userLoggedIn) {
    switch ($mode) {
        case 'dark': echo "Dark mode"; break;
        case 'light': echo "Light mode"; break;
    }
}
23. Tax calculation
if ($income > 250000) {
    switch (true) {
        case $income > 1000000: echo "30% tax"; break;
        default: echo "10% tax";
    }
}
24. Product category
if ($inStock) {
    switch ($category) {
        case 'electronics': echo "Warranty available"; break;
        case 'clothing': echo "No warranty"; break;
    }
}
25. Result type
if ($resultDeclared) {
    switch ($status) {
        case 'pass': echo "Congratulations"; break;
        case 'fail': echo "Better luck"; break;
    }
}

26. Game level
if ($playing) {
    switch ($level) {
        case 1: echo "Easy"; break;
        case 2: echo "Medium"; break;
    }
}
27. Bank account
if ($accountActive) {
    switch ($accountType) {
        case 'savings': echo "Savings account"; break;
        case 'current': echo "Current account"; break;
    }
}
28. Ticket priority
if ($ticketOpen) {
    switch ($priority) {
        case 'high': echo "Urgent"; break;
        case 'low': echo "Normal"; break;
    }
}
29. Attendance
if ($attendance >= 75) {
    switch ($grade) {
        case 'A': echo "Eligible"; break;
        default: echo "Conditional";
    }
}
30. Voting
if ($age >= 18) {
    switch ($citizen) {
        case true: echo "Can vote"; break;
        default: echo "Cannot vote";
    }
}

31. Hotel booking
if ($roomAvailable) {
    switch ($roomType) {
        case 'single': echo "Single room"; break;
        case 'double': echo "Double room"; break;
    }
}
32. Employee type
if ($working) {
    switch ($empType) {
        case 'full': echo "Full-time"; break;
        case 'part': echo "Part-time"; break;
    }
}
33. Exam mode
if ($eligible) {
    switch ($mode) {
        case 'cbt': echo "Computer based"; break;
        case 'pen': echo "Pen & paper"; break;
    }
}
34. Movie rating
if ($age >= 13) {
    switch ($rating) {
        case 'PG': echo "Allowed"; break;
        case 'R': echo "Restricted"; break;
    }
}
35. Loan approval
if ($salary > 30000) {
    switch ($creditScore) {
        case 'good': echo "Approved"; break;
        case 'bad': echo "Rejected"; break;
    }
}

36. Course enrollment
if ($feesPaid) {
    switch ($course) {
        case 'php': echo "PHP course"; break;
        case 'java': echo "Java course"; break;
    }
}
37. Device power
if ($poweredOn) {
    switch ($battery) {
        case 'low': echo "Charge"; break;
        case 'full': echo "Good to go"; break;
    }
}
38. Event entry
if ($invited) {
    switch ($pass) {
        case 'vip': echo "VIP entry"; break;
        case 'normal': echo "Regular entry"; break;
    }
}
39. Food order
if ($hungry) {
    switch ($food) {
        case 'veg': echo "Veg meal"; break;
        case 'nonveg': echo "Non-veg meal"; break;
    }
}
40. Exam retry
if (!$passed) {
    switch ($attempts) {
        case 1: echo "Retry allowed"; break;
        default: echo "No more attempts";
    }
}

41. Currency selection
if ($international) {
    switch ($currency) {
        case 'USD': echo "Dollar"; break;
        case 'EUR': echo "Euro"; break;
    }
}
42. Service request
if ($requestOpen) {
    switch ($service) {
        case 'repair': echo "Repair service"; break;
        case 'install': echo "Installation"; break;
    }
}
43. Driving license
if ($age >= 18) {
    switch ($vehicleType) {
        case '2w': echo "Two-wheeler"; break;
        case '4w': echo "Four-wheeler"; break;
    }
}
44. Online class
if ($enrolled) {
    switch ($platform) {
        case 'zoom': echo "Zoom class"; break;
        case 'meet': echo "Google Meet"; break;
    }
}
45. Score review
if ($reviewed) {
    switch ($finalScore) {
        case 100: echo "Perfect"; break;
        default: echo "Reviewed";
    }
}

46. Browser detection
if ($supported) {
    switch ($browser) {
        case 'chrome': echo "Chrome supported"; break;
        case 'firefox': echo "Firefox supported"; break;
    }
}
47. Notification
if ($notify) {
    switch ($type) {
        case 'email': echo "Email sent"; break;
        case 'sms': echo "SMS sent"; break;
    }
}
48. Job level
if ($experience > 2) {
    switch ($level) {
        case 'junior': echo "Promoted"; break;
        case 'senior': echo "Lead role"; break;
    }
}
49. System access
if ($authenticated) {
    switch ($module) {
        case 'hr': echo "HR access"; break;
        case 'finance': echo "Finance access"; break;
    }
}
50. Final combo (nested if + switch)
if ($loggedIn) {
    if ($verified) {
        switch ($role) {
            case 'admin': echo "Full access"; break;
            default: echo "Limited access";
        }
    } else {
        echo "Verify account";
    }
} -->
