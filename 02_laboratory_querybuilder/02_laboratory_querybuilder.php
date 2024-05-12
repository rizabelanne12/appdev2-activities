# Task#1
# SQL Syntax
  SELECT * FROM students;
Your query builder syntax
 $students = DB::table('students')->get();
 

# Task#2
# SQL Syntax
  SELECT * FROM students WHERE grade = 10;
Your query builder syntax
 $students = DB::table('students')->WHERE('grade' ,'=',10)->get();


# Task#3
# SQL Syntax
  SELECT * FROM students WHERE age BETWEEN 15 AND 18;
Your query builder syntax
  $students = DB::table('students')->whereBETWEEN('age', [15,18] )->get();

# Task#4
# SQL Syntax
  SELECT * FROM students WHERE city = 'Manila';
Your query builder syntax
  $students = DB::table('students')->where('city', 'manila' )->get();

# Task#5
# SQL Syntax
   SELECT * FROM students ORDER BY age DESC;
Your query builder syntax
   $students = DB::table('students')->orderBy('age', 'DESC' )->get();


# Task#6
# SQL Syntax
  SELECT students.*, teachers.name AS 
  teacher_name FROM students LEFT JOIN teachers 
  ON students.teacher_id = teachers.id;
Your query builder syntax
 $students = DB::table('students')
    ->select('students.*','teachers.name AS teacher_name')
    ->leftJoin('teachers', 'students.teacher_id', '=', 'teachers.id')
    ->get();


# Task#7
# SQL Syntax
  SELECT teachers.*, COUNT(students.id) AS student_count 
  FROM teachers 
  LEFT JOIN students ON teachers.id = students.teacher_id 
  GROUP BY teachers.id;
Your query builder syntax
 $teachers = DB::table('teachers')
    ->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
    ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
    ->groupBy('teachers.id')
    ->get();
 


# Task#8
# SQL Syntax
  SELECT students.*, subjects.name AS subject_name 
  FROM students 
  INNER JOIN subjects ON students.subject_id = subjects.id;
Your query builder syntax
   $students = DB::table('students')
    ->select('students.*','teachers.name AS teacher_name')
    ->join('teachers', 'students.teacher_id', '=', 'teachers.id')
    ->get();


# Task#9
# SQL Syntax
   SELECT students.*, AVG(scores.score) AS average_score 
   FROM students 
   LEFT JOIN scores ON students.id = scores.student_id 
GROUP BY students.id;
Your query builder syntax
    $students = DB::table('students')
    ->select('students.*', DB::raw('AVG(scores.score) AS average_score'))
    ->leftJoin('scores', 'students.id', '=', 'scores.student_id')
    ->groupBy('students.id')
    ->get();
   

# Task#10
# SQL Syntax
  SELECT teachers.*, COUNT(students.id) AS student_count 
  FROM teachers 
  LEFT JOIN students ON teachers.id = students.teacher_id 
  GROUP BY teachers.id 
  ORDER BY student_count DESC 
  LIMIT 5;
  GROUP BY students.id;
Your query builder syntax
   $teachers = DB::table('teachers')
    ->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
    ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
    ->groupBy('teachers.id')
    ->orderByDesc('student_count')
    ->limit(5)
    ->get();
    