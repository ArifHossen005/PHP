\# PHP Built-in Functions সম্পূর্ণ গাইড (বাংলা)



\## StudentManager.php তে ব্যবহৃত সকল Built-in Functions এর বিস্তারিত ব্যাখ্যা



---



\## 📚 সূচিপত্র



1\. \[File Handling Functions](#1-file-handling-functions)

2\. \[JSON Functions](#2-json-functions)

3\. \[Array Functions](#3-array-functions)

4\. \[Validation Functions](#4-validation-functions)

5\. \[Loop \& Control Structures](#5-loop--control-structures)



---



\## 1. File Handling Functions



\### 🔹 `file\_exists($filename)`



\*\*কাজ কি:\*\*  

কোন ফাইল বা ফোল্ডার আছে কিনা তা চেক করে। থাকলে `true`, না থাকলে `false` রিটার্ন করে।



\*\*Syntax:\*\*

```php

file\_exists(string $filename): bool

```



\*\*উদাহরণ ১: ফাইল আছে কিনা চেক করা\*\*

```php

<?php

if (file\_exists('students.json')) {

&nbsp;   echo "ফাইল পাওয়া গেছে!";

} else {

&nbsp;   echo "ফাইল নেই!";

}

?>

```



\*\*উদাহরণ ২: ফোল্ডার চেক করা\*\*

```php

<?php

if (file\_exists('uploads/')) {

&nbsp;   echo "আপলোড ফোল্ডার আছে";

} else {

&nbsp;   mkdir('uploads/'); // ফোল্ডার তৈরি করা

&nbsp;   echo "নতুন ফোল্ডার তৈরি করা হয়েছে";

}

?>

```



\*\*উদাহরণ ৩: ইমেজ ফাইল চেক\*\*

```php

<?php

$image = 'profile.jpg';

if (file\_exists($image)) {

&nbsp;   echo "<img src='$image' alt='Profile'>";

} else {

&nbsp;   echo "<img src='default.jpg' alt='Default'>";

}

?>

```



\*\*উদাহরণ ৪: কনফিগ ফাইল লোড করা\*\*

```php

<?php

$configFile = 'config.php';

if (file\_exists($configFile)) {

&nbsp;   include $configFile;

} else {

&nbsp;   die("Configuration file missing!");

}

?>

```



\*\*উদাহরণ ৫: একাধিক ফাইল চেক\*\*

```php

<?php

$files = \['data.json', 'users.json', 'settings.json'];

foreach ($files as $file) {

&nbsp;   if (file\_exists($file)) {

&nbsp;       echo "$file - পাওয়া গেছে<br>";

&nbsp;   } else {

&nbsp;       echo "$file - পাওয়া যায়নি<br>";

&nbsp;   }

}

?>

```



---



\### 🔹 `file\_get\_contents($filename)`



\*\*কাজ কি:\*\*  

কোন ফাইলের সম্পূর্ণ কন্টেন্ট একবারে পড়ে এবং string হিসেবে রিটার্ন করে।



\*\*Syntax:\*\*

```php

file\_get\_contents(string $filename): string|false

```



\*\*উদাহরণ ১: JSON ফাইল পড়া\*\*

```php

<?php

$jsonData = file\_get\_contents('students.json');

echo $jsonData;

// Output: \[{"id":1,"name":"John"}, ...]

?>

```



\*\*উদাহরণ ২: টেক্সট ফাইল পড়া\*\*

```php

<?php

$content = file\_get\_contents('message.txt');

echo nl2br($content); // নতুন লাইন HTML এ দেখানোর জন্য

?>

```



\*\*উদাহরণ ৩: URL থেকে ডাটা পড়া\*\*

```php

<?php

$html = file\_get\_contents('https://www.example.com');

echo $html;

?>

```



\*\*উদাহরণ ৪: API থেকে ডাটা নেওয়া\*\*

```php

<?php

$apiUrl = 'https://api.github.com/users/github';

$response = file\_get\_contents($apiUrl);

$data = json\_decode($response, true);

echo "Name: " . $data\['name'];

?>

```



\*\*উদাহরণ ৫: Error Handling সহ পড়া\*\*

```php

<?php

$filename = 'data.txt';

$content = @file\_get\_contents($filename);

if ($content === false) {

&nbsp;   echo "ফাইল পড়তে ব্যর্থ!";

} else {

&nbsp;   echo $content;

}

?>

```



---



\### 🔹 `file\_put\_contents($filename, $data)`



\*\*কাজ কি:\*\*  

কোন ফাইলে ডাটা লিখে/সেভ করে। ফাইল না থাকলে নতুন ফাইল তৈরি করে।



\*\*Syntax:\*\*

```php

file\_put\_contents(string $filename, mixed $data): int|false

```



\*\*উদাহরণ ১: JSON ডাটা সেভ করা\*\*

```php

<?php

$students = \[

&nbsp;   \['id' => 1, 'name' => 'রহিম'],

&nbsp;   \['id' => 2, 'name' => 'করিম']

];

$json = json\_encode($students, JSON\_PRETTY\_PRINT);

file\_put\_contents('students.json', $json);

echo "ডাটা সেভ হয়েছে!";

?>

```



\*\*উদাহরণ ২: টেক্সট ফাইলে লেখা\*\*

```php

<?php

$message = "আসসালামু আলাইকুম!\\nএটি একটি টেস্ট মেসেজ।";

file\_put\_contents('message.txt', $message);

?>

```



\*\*উদাহরণ ৩: ফাইলের শেষে যোগ করা (Append)\*\*

```php

<?php

$log = date('Y-m-d H:i:s') . " - User logged in\\n";

file\_put\_contents('activity.log', $log, FILE\_APPEND);

?>

```



\*\*উদাহরণ ৪: HTML ফাইল তৈরি\*\*

```php

<?php

$html = "<!DOCTYPE html>

<html>

<head><title>My Page</title></head>

<body><h1>Hello World</h1></body>

</html>";

file\_put\_contents('index.html', $html);

?>

```



\*\*উদাহরণ ৫: Array থেকে CSV তৈরি\*\*

```php

<?php

$data = "Name,Email,Phone\\n";

$data .= "রহিম,rahim@example.com,01712345678\\n";

$data .= "করিম,karim@example.com,01812345678\\n";

file\_put\_contents('contacts.csv', $data);

?>

```



---



\## 2. JSON Functions



\### 🔹 `json\_encode($value, $options)`



\*\*কাজ কি:\*\*  

PHP Array বা Object কে JSON string এ রূপান্তর করে।



\*\*Syntax:\*\*

```php

json\_encode(mixed $value, int $options = 0): string|false

```



\*\*উদাহরণ ১: Simple Array to JSON\*\*

```php

<?php

$fruits = \['আম', 'কাঁঠাল', 'লিচু'];

$json = json\_encode($fruits);

echo $json;

// Output: \["আম","কাঁঠাল","লিচু"]

?>

```



\*\*উদাহরণ ২: Associative Array to JSON\*\*

```php

<?php

$student = \[

&nbsp;   'name' => 'রহিম',

&nbsp;   'age' => 20,

&nbsp;   'city' => 'ঢাকা'

];

$json = json\_encode($student);

echo $json;

// Output: {"name":"রহিম","age":20,"city":"ঢাকা"}

?>

```



\*\*উদাহরণ ৩: Pretty Print JSON\*\*

```php

<?php

$data = \[

&nbsp;   'id' => 1,

&nbsp;   'name' => 'করিম',

&nbsp;   'courses' => \['PHP', 'JavaScript', 'Python']

];

$json = json\_encode($data, JSON\_PRETTY\_PRINT);

echo "<pre>$json</pre>";

/\* Output:

{

&nbsp;   "id": 1,

&nbsp;   "name": "করিম",

&nbsp;   "courses": \[

&nbsp;       "PHP",

&nbsp;       "JavaScript",

&nbsp;       "Python"

&nbsp;   ]

}

\*/

?>

```



\*\*উদাহরণ ৪: Unicode সংরক্ষণ করা\*\*

```php

<?php

$data = \['name' => 'বাংলাদেশ'];

$json = json\_encode($data, JSON\_UNESCAPED\_UNICODE);

echo $json;

// Output: {"name":"বাংলাদেশ"}

?>

```



\*\*উদাহরণ ৫: Multiple Students to JSON\*\*

```php

<?php

$students = \[

&nbsp;   \['id' => 1, 'name' => 'রহিম', 'marks' => 85],

&nbsp;   \['id' => 2, 'name' => 'করিম', 'marks' => 90],

&nbsp;   \['id' => 3, 'name' => 'সালমা', 'marks' => 88]

];

$json = json\_encode($students, JSON\_PRETTY\_PRINT);

file\_put\_contents('students.json', $json);

echo "তিনজন স্টুডেন্টের ডাটা সেভ হয়েছে!";

?>

```



---



\### 🔹 `json\_decode($json, $associative)`



\*\*কাজ কি:\*\*  

JSON string কে PHP Array বা Object এ রূপান্তর করে।



\*\*Syntax:\*\*

```php

json\_decode(string $json, bool $associative = false): mixed

```



\*\*উদাহরণ ১: JSON to Array\*\*

```php

<?php

$json = '{"name":"রহিম","age":25}';

$data = json\_decode($json, true);

echo $data\['name']; // Output: রহিম

echo $data\['age'];  // Output: 25

?>

```



\*\*উদাহরণ ২: JSON to Object\*\*

```php

<?php

$json = '{"name":"করিম","city":"চট্টগ্রাম"}';

$obj = json\_decode($json);

echo $obj->name; // Output: করিম

echo $obj->city; // Output: চট্টগ্রাম

?>

```



\*\*উদাহরণ ৩: JSON ফাইল থেকে Array\*\*

```php

<?php

$jsonString = file\_get\_contents('students.json');

$students = json\_decode($jsonString, true);

foreach ($students as $student) {

&nbsp;   echo $student\['name'] . "<br>";

}

?>

```



\*\*উদাহরণ ৪: API Response Parse করা\*\*

```php

<?php

$apiResponse = '{"status":"success","data":{"temp":28,"city":"Dhaka"}}';

$result = json\_decode($apiResponse, true);

if ($result\['status'] === 'success') {

&nbsp;   echo "তাপমাত্রা: " . $result\['data']\['temp'] . "°C";

}

?>

```



\*\*উদাহরণ ৫: Error Handling\*\*

```php

<?php

$json = '{"name":"রহিম",}'; // ভুল JSON

$data = json\_decode($json, true);

if (json\_last\_error() !== JSON\_ERROR\_NONE) {

&nbsp;   echo "JSON Error: " . json\_last\_error\_msg();

} else {

&nbsp;   print\_r($data);

}

?>

```



---



\## 3. Array Functions



\### 🔹 `count($array)`



\*\*কাজ কি:\*\*  

Array তে কতগুলো element আছে তা গণনা করে।



\*\*Syntax:\*\*

```php

count(array $array): int

```



\*\*উদাহরণ ১: Simple Array Count\*\*

```php

<?php

$fruits = \['আম', 'কলা', 'আপেল'];

$total = count($fruits);

echo "মোট ফল: $total"; // Output: মোট ফল: 3

?>

```



\*\*উদাহরণ ২: Students Count\*\*

```php

<?php

$students = \[

&nbsp;   \['name' => 'রহিম'],

&nbsp;   \['name' => 'করিম'],

&nbsp;   \['name' => 'সালমা']

];

echo "মোট স্টুডেন্ট: " . count($students); // Output: 3

?>

```



\*\*উদাহরণ ৩: Empty Array Check\*\*

```php

<?php

$items = \[];

if (count($items) === 0) {

&nbsp;   echo "কোন আইটেম নেই!";

} else {

&nbsp;   echo "আইটেম আছে: " . count($items);

}

?>

```



\*\*উদাহরণ ৪: Multidimensional Array\*\*

```php

<?php

$data = \[

&nbsp;   \['id' => 1, 'name' => 'রহিম'],

&nbsp;   \['id' => 2, 'name' => 'করিম']

];

echo "Rows: " . count($data); // Output: 2

echo "Columns: " . count($data\[0]); // Output: 2

?>

```



\*\*উদাহরণ ৫: Loop এ ব্যবহার\*\*

```php

<?php

$numbers = \[10, 20, 30, 40, 50];

for ($i = 0; $i < count($numbers); $i++) {

&nbsp;   echo "Index $i: " . $numbers\[$i] . "<br>";

}

?>

```



---



\### 🔹 `array\_filter($array, $callback)`



\*\*কাজ কি:\*\*  

Array থেকে নির্দিষ্ট শর্ত অনুযায়ী element ফিল্টার করে। যেগুলো শর্ত পূরণ করে শুধু সেগুলো রাখে।



\*\*Syntax:\*\*

```php

array\_filter(array $array, callable $callback = null): array

```



\*\*উদাহরণ ১: নির্দিষ্ট ID বাদ দেওয়া (Delete এর জন্য)\*\*

```php

<?php

$students = \[

&nbsp;   \['id' => 1, 'name' => 'রহিম'],

&nbsp;   \['id' => 2, 'name' => 'করিম'],

&nbsp;   \['id' => 3, 'name' => 'সালমা']

];



$deleteId = 2;

$students = array\_filter($students, function($student) use ($deleteId) {

&nbsp;   return $student\['id'] != $deleteId;

});



print\_r($students);

// রহিম এবং সালমা থাকবে, করিম বাদ যাবে

?>

```



\*\*উদাহরণ ২: Active স্টুডেন্ট খুঁজে বের করা\*\*

```php

<?php

$students = \[

&nbsp;   \['name' => 'রহিম', 'status' => 'Active'],

&nbsp;   \['name' => 'করিম', 'status' => 'Inactive'],

&nbsp;   \['name' => 'সালমা', 'status' => 'Active']

];



$activeStudents = array\_filter($students, function($s) {

&nbsp;   return $s\['status'] === 'Active';

});



// শুধু রহিম এবং সালমা পাওয়া যাবে

?>

```



\*\*উদাহরণ ৩: খালি মান বাদ দেওয়া\*\*

```php

<?php

$data = \['রহিম', '', 'করিম', null, 'সালমা', 0];

$filtered = array\_filter($data);

print\_r($filtered);

// Output: \['রহিম', 'করিম', 'সালমা']

?>

```



\*\*উদাহরণ ৪: নাম্বার ফিল্টার (৫০ এর বেশি)\*\*

```php

<?php

$marks = \[45, 67, 89, 34, 78, 56];

$passed = array\_filter($marks, function($mark) {

&nbsp;   return $mark >= 50;

});

print\_r($passed);

// Output: \[67, 89, 78, 56]

?>

```



\*\*উদাহরণ ৫: নির্দিষ্ট শহরের স্টুডেন্ট\*\*

```php

<?php

$students = \[

&nbsp;   \['name' => 'রহিম', 'city' => 'ঢাকা'],

&nbsp;   \['name' => 'করিম', 'city' => 'চট্টগ্রাম'],

&nbsp;   \['name' => 'সালমা', 'city' => 'ঢাকা']

];



$dhakaStudents = array\_filter($students, function($s) {

&nbsp;   return $s\['city'] === 'ঢাকা';

});

// রহিম এবং সালমা পাওয়া যাবে

?>

```



---



\### 🔹 `array\_values($array)`



\*\*কাজ কি:\*\*  

Array এর সব value নিয়ে নতুন একটি array তৈরি করে এবং index রি-সেট করে (0, 1, 2, ...)



\*\*Syntax:\*\*

```php

array\_values(array $array): array

```



\*\*উদাহরণ ১: Index Re-indexing\*\*

```php

<?php

$data = \[

&nbsp;   0 => 'রহিম',

&nbsp;   5 => 'করিম',

&nbsp;   10 => 'সালমা'

];

$reindexed = array\_values($data);

print\_r($reindexed);

/\* Output:

Array (

&nbsp;   \[0] => রহিম

&nbsp;   \[1] => করিম

&nbsp;   \[2] => সালমা

)

\*/

?>

```



\*\*উদাহরণ ২: After Delete Re-indexing\*\*

```php

<?php

$students = \[

&nbsp;   \['id' => 1, 'name' => 'রহিম'],

&nbsp;   \['id' => 2, 'name' => 'করিম'],

&nbsp;   \['id' => 3, 'name' => 'সালমা']

];



// ID 2 ডিলিট করা

$students = array\_filter($students, function($s) {

&nbsp;   return $s\['id'] != 2;

});



// Re-index করা

$students = array\_values($students);

print\_r($students);

/\* Output:

Array (

&nbsp;   \[0] => Array ( \[id] => 1, \[name] => রহিম )

&nbsp;   \[1] => Array ( \[id] => 3, \[name] => সালমা )

)

\*/

?>

```



\*\*উদাহরণ ৩: Associative Array থেকে Values নেওয়া\*\*

```php

<?php

$person = \[

&nbsp;   'name' => 'রহিম',

&nbsp;   'age' => 25,

&nbsp;   'city' => 'ঢাকা'

];

$values = array\_values($person);

print\_r($values);

// Output: \['রহিম', 25, 'ঢাকা']

?>

```



\*\*উদাহরণ ৪: JSON সেভ করার আগে Re-index\*\*

```php

<?php

$data = \[

&nbsp;   10 => \['name' => 'A'],

&nbsp;   20 => \['name' => 'B'],

&nbsp;   30 => \['name' => 'C']

];

$data = array\_values($data);

$json = json\_encode($data, JSON\_PRETTY\_PRINT);

file\_put\_contents('data.json', $json);

?>

```



\*\*উদাহরণ ৫: Loop এ ব্যবহার\*\*

```php

<?php

$marks = \[

&nbsp;   'Bangla' => 85,

&nbsp;   'English' => 78,

&nbsp;   'Math' => 92

];

$scores = array\_values($marks);

foreach ($scores as $index => $score) {

&nbsp;   echo "Subject " . ($index + 1) . ": $score<br>";

}

?>

```



---



\## 4. Validation Functions



\### 🔹 `filter\_var($variable, $filter)`



\*\*কাজ কি:\*\*  

বিভিন্ন ধরনের ডাটা ভ্যালিডেট বা ফিল্টার করে (Email, URL, IP, Number ইত্যাদি)



\*\*Syntax:\*\*

```php

filter\_var(mixed $variable, int $filter): mixed

```



\*\*উদাহরণ ১: Email Validation\*\*

```php

<?php

$email = "rahim@example.com";

if (filter\_var($email, FILTER\_VALIDATE\_EMAIL)) {

&nbsp;   echo "সঠিক ইমেইল!";

} else {

&nbsp;   echo "ভুল ইমেইল!";

}

?>

```



\*\*উদাহরণ ২: Invalid Email Check\*\*

```php

<?php

$email = "rahim@invalid";

if (filter\_var($email, FILTER\_VALIDATE\_EMAIL)) {

&nbsp;   echo "ইমেইল সঠিক";

} else {

&nbsp;   echo "ইমেইল ভুল! সঠিক ফরম্যাট: user@example.com";

}

?>

```



\*\*উদাহরণ ৩: URL Validation\*\*

```php

<?php

$url = "https://www.google.com";

if (filter\_var($url, FILTER\_VALIDATE\_URL)) {

&nbsp;   echo "সঠিক URL!";

} else {

&nbsp;   echo "ভুল URL!";

}

?>

```



\*\*উদাহরণ ৪: IP Address Validation\*\*

```php

<?php

$ip = "192.168.1.1";

if (filter\_var($ip, FILTER\_VALIDATE\_IP)) {

&nbsp;   echo "সঠিক IP Address!";

} else {

&nbsp;   echo "ভুল IP Address!";

}

?>

```



\*\*উদাহরণ ৫: Integer Validation\*\*

```php

<?php

$age = "25";

$validAge = filter\_var($age, FILTER\_VALIDATE\_INT);

if ($validAge !== false) {

&nbsp;   echo "বয়স: $validAge";

} else {

&nbsp;   echo "বয়স একটি সংখ্যা হতে হবে!";

}

?>

```



---



\## 5. Loop \& Control Structures



\### 🔹 `foreach($array as $item)`



\*\*কাজ কি:\*\*  

Array এর প্রতিটি element এর উপর একবার করে loop চালায়।



\*\*Syntax:\*\*

```php

foreach ($array as $value) { }

foreach ($array as $key => $value) { }

```



\*\*উদাহরণ ১: Simple Array Loop\*\*

```php

<?php

$fruits = \['আম', 'কলা', 'আপেল', 'কমলা'];

foreach ($fruits as $fruit) {

&nbsp;   echo $fruit . "<br>";

}

/\* Output:

আম

কলা

আপেল

কমলা

\*/

?>

```



\*\*উদাহরণ ২: Associative Array Loop\*\*

```php

<?php

$student = \[

&nbsp;   'name' => 'রহিম',

&nbsp;   'age' => 20,

&nbsp;   'city' => 'ঢাকা'

];

foreach ($student as $key => $value) {

&nbsp;   echo "$key: $value<br>";

}

/\* Output:

name: রহিম

age: 20

city: ঢাকা

\*/

?>

```



\*\*উদাহরণ ৩: Students Array Loop\*\*

```php

<?php

$students = \[

&nbsp;   \['id' => 1, 'name' => 'রহিম', 'marks' => 85],

&nbsp;   \['id' => 2, 'name' => 'করিম', 'marks' => 90],

&nbsp;   \['id' => 3, 'name' => 'সালমা', 'marks' => 88]

];



foreach ($students as $student) {

&nbsp;   echo "ID: {$student\['id']}, Name: {$student\['name']}, Marks: {$student\['marks']}<br>";

}

?>

```



\*\*উদাহরণ ৪: HTML Table তৈরি\*\*

```php

<?php

$products = \[

&nbsp;   \['name' => 'মোবাইল', 'price' => 15000],

&nbsp;   \['name' => 'ল্যাপটপ', 'price' => 45000],

&nbsp;   \['name' => 'ট্যাবলেট', 'price' => 25000]

];



echo "<table border='1'>";

echo "<tr><th>Product</th><th>Price</th></tr>";

foreach ($products as $product) {

&nbsp;   echo "<tr>";

&nbsp;   echo "<td>{$product\['name']}</td>";

&nbsp;   echo "<td>{$product\['price']} টাকা</td>";

&nbsp;   echo "</tr>";

}

echo "</table>";

?>

```



\*\*উদাহরণ ৫: নির্দিষ্ট Student খুঁজে বের করা\*\*

```php

<?php

$students = \[

&nbsp;   \['id' => 1, 'name' => 'রহিম'],

&nbsp;   \['id' => 2, 'name' => 'করিম'],

&nbsp;   \['id' => 3, 'name' => 'সালমা']

];



$searchId = 2;

$found = null;



foreach ($students as $student) {

&nbsp;   if ($student\['id'] == $searchId) {

&nbsp;       $found = $student;

&nbsp;       break; // পাওয়া গেলে loop বন্ধ

&nbsp;   }

}



if ($found) {

&nbsp;   echo "পাওয়া গেছে: " . $found\['name'];

} else {

&nbsp;   echo "পাওয়া যায়নি!";

}

?>

```



---



\## 📌 Constants (ধ্রুবক)



\### 🔹 `JSON\_PRETTY\_PRINT`



\*\*কাজ কি:\*\*  

JSON কে সুন্দরভাবে ফরম্যাট করে (Indentation সহ) যাতে পড়তে সহজ হয়।



\*\*উদাহরণ:\*\*

```php

<?php

$data = \['name' => 'রহিম', 'age' => 25];



// Without JSON\_PRETTY\_PRINT

echo json\_encode($data);

// Output: {"name":"রহিম","age":25}



// With JSON\_PRETTY\_PRINT

echo json\_encode($data, JSON\_PRETTY\_PRINT);

/\* Output:

{

&nbsp;   "name": "রহিম",

&nbsp;   "age": 25

}

\*/

?>

```



---



\### 🔹 `FILTER\_VALIDATE\_EMAIL`



\*\*কাজ কি:\*\*  

`filter\_var()` function এ ব্যবহার করা হয় Email ভ্যালিডেট করার জন্য।



\*\*উদাহরণ:\*\*

```php

<?php

$email = "test@example.com";

if (filter\_var($email, FILTER\_VALIDATE\_EMAIL)) {

&nbsp;   echo "ইমেইল সঠিক!";

}

?>

```



---



\### 🔹 `FILE\_APPEND`



\*\*কাজ কি:\*\*  

`file\_put\_contents()` এ ব্যবহার করা হয় ফাইলের শেষে নতুন কন্টেন্ট যোগ করার জন্য (পুরনো মুছে না ফেলে)।



\*\*উদাহরণ:\*\*

```php

<?php

// প্রথমবার

file\_put\_contents('log.txt', "প্রথম লাইন\\n");



// দ্বিতীয়বার (Append)

file\_put\_contents('log.txt', "দ্বিতীয় লাইন\\n", FILE\_APPEND);



// ফাইলে দুটি লাইন থাকবে

?>

```



---



\## 🎯 সারাংশ - StudentManager.php তে কোথায় কি ব্যবহার হয়েছে



\### \*\*getAllStudents() Method:\*\*

```php

\- file\_get\_contents()  → students.json ফাইল পড়ে

\- json\_decode()        → JSON কে PHP Array তে রূপান্তর করে

```



\### \*\*getStudentById() Method:\*\*

```php

\- getAllStudents()     → সব স্টুডেন্ট নেয়

\- foreach()            → প্রতিটি স্টুডেন্টে loop চালায়

```



\### \*\*create() Method:\*\*

```php

\- filter\_var()         → Email ভ্যালিডেট করে

\- FILTER\_VALIDATE\_EMAIL → Email চেক করার constant

\- getAllStudents()     → বর্তমান সব স্টুডেন্ট নেয়

\- foreach()            → Duplicate email চেক করে

\- json\_encode()        → Array কে JSON এ রূপান্তর করে

\- JSON\_PRETTY\_PRINT    → সুন্দর ফরম্যাটে সেভ করে

\- file\_put\_contents()  → JSON ফাইলে সেভ করে

```



\### \*\*update() Method:\*\*

```php

\- filter\_var()         → Email ভ্যালিডেট করে

\- getAllStudents()     → সব স্টুডেন্ট নেয়

\- foreach()            → নির্দিষ্ট স্টুড

