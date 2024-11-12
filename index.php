<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-200 to-blue-400 flex items-center justify-center min-h-screen font-sans">
    <?php
        $Stu = array(
            array("Thy Muoyhak", "Male", 100, 100, 100),
            array("Cheoun Daro", "Male", 89, 89, 89),
            array("Nhem Somean", "Male", 79, 79, 79)
        );

        function getDataStu($index, $student) {
            $name = $student[0];
            $gender = $student[1];
            $html = $student[2];
            $css = $student[3];
            $js = $student[4];

            return "
                <tr class='" . ($index % 2 == 0 ? 'bg-gray-50' : 'bg-white') . " hover:bg-gray-200 transition duration-300 ease-in-out'>
                    <td class='p-4 text-center border border-gray-300'>" . ($index + 1) . "</td>
                    <td class='p-4 border border-gray-300'>$name</td>
                    <td class='p-4 text-center border border-gray-300'>$gender</td>
                    <td class='p-4 text-center border border-gray-300'>$html</td>
                    <td class='p-4 text-center border border-gray-300'>$css</td>
                    <td class='p-4 text-center border border-gray-300'>$js</td>
                </tr>
            ";
        }

        function getDataTotalStu($index, $student) {
            $name = $student[0];
            $gender = $student[1];
            $html = $student[2];
            $css = $student[3];
            $js = $student[4];
            $total = $html + $css + $js;
            $average = $total / 3;

            if ($average >= 90) {
                $grade = "A";
                $grade_class = "text-green-500 font-semibold";
            } else if ($average >= 80) {
                $grade = "B";
                $grade_class = "text-blue-500 font-semibold";
            } else if ($average >= 70) {
                $grade = "C";
                $grade_class = "text-yellow-500 font-semibold";
            } else if ($average >= 60) {
                $grade = "D";
                $grade_class = "text-orange-500 font-semibold";
            } else if ($average >= 50) {
                $grade = "E";
                $grade_class = "text-red-500 font-semibold";
            } else {
                $grade = "F";
                $grade_class = "text-red-500 font-semibold";
            }

            return "
                <tr class='" . ($index % 2 == 0 ? 'bg-gray-50' : 'bg-white') . " hover:bg-gray-200 transition duration-300 ease-in-out'>
                    <td class='p-4 text-center border border-gray-300'>" . ($index + 1) . "</td>
                    <td class='p-4 border border-gray-300'>$name</td>
                    <td class='p-4 text-center border border-gray-300'>$gender</td>
                    <td class='p-4 text-center border border-gray-300'>$html</td>
                    <td class='p-4 text-center border border-gray-300'>$css</td>
                    <td class='p-4 text-center border border-gray-300'>$js</td>
                    <td class='p-4 text-center border border-gray-300'>$total</td>
                    <td class='p-4 text-center border border-gray-300'>" . number_format($average, 2) . "</td>
                    <td class='p-4 text-center border border-gray-300 $grade_class'>$grade</td>
                </tr>
            ";
        }
    ?>

    <div class="space-y-10 w-full max-w-5xl mx-auto">
        <!-- Start Student Data -->
        <div class="w-full bg-white shadow-2xl rounded-lg overflow-hidden">
            <div class="text-2xl font-bold text-center py-4 bg-gradient-to-r from-teal-500 to-indigo-600 text-white">Information Student</div>
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-teal-500 text-white">
                        <th class="p-4 border border-gray-300 text-center">No</th>
                        <th class="p-4 border border-gray-300">Name</th>
                        <th class="p-4 border border-gray-300 text-center">Gender</th>
                        <th class="p-4 border border-gray-300 text-center">HTML</th>
                        <th class="p-4 border border-gray-300 text-center">CSS</th>
                        <th class="p-4 border border-gray-300 text-center">JS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($Stu as $index => $student) {
                            echo getDataStu($index, $student);
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- End Student Data -->

        <!-- Start Find Grade Student -->
        <div class="w-full bg-white shadow-2xl rounded-lg overflow-hidden">
            <div class="text-2xl font-bold text-center py-4 bg-gradient-to-r from-purple-500 to-pink-600 text-white">Student Result</div>
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-purple-500 text-white">
                        <th class="p-4 border border-gray-300 text-center">No</th>
                        <th class="p-4 border border-gray-300">Name</th>
                        <th class="p-4 border border-gray-300 text-center">Gender</th>
                        <th class="p-4 border border-gray-300 text-center">HTML</th>
                        <th class="p-4 border border-gray-300 text-center">CSS</th>
                        <th class="p-4 border border-gray-300 text-center">JS</th>
                        <th class="p-4 border border-gray-300 text-center">Total</th>
                        <th class="p-4 border border-gray-300 text-center">Average</th>
                        <th class="p-4 border border-gray-300 text-center">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($Stu as $index => $student) {
                            echo getDataTotalStu($index, $student);
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- End Find Grade Student -->
    </div>
</body>
</html>
