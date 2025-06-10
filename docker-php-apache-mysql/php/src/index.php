<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="image\Logo\Logo.png" type="image/png" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Docker Test</title>
</head>

<body>

     <?php require_once 'nav.php'; ?>

    <div class="sidebar">
            <button class="active" onclick="showTab('tab1', this)">
               <img src="image/Logo/home.png" class="icon" alt=" " />
                    Home
            </button>
             <button onclick="showTab('tab2', this)">
                <img src="image/Logo/Job.png" class="icon" alt=" " />
                    Job
            </button>

            <button class=" " onclick="showTab('tab3', this)">
                <img src="image/Logo/Job Graph.png" class="icon" alt=" " />
                    Job Graph
            </button>

            <button onclick="showTab('tab4', this)">
                <img src="image/Logo/Inventory Graph.png" class="icon" alt=" " />
                    Inventory Graph
            </button>

            <button onclick="showTab('tab5', this)">
                <img src="image/Logo/All Job.png" class="icon" alt=" " />
                    All Job
            </button>

            <button onclick="showTab('tab6', this)">
                <img src="image/Logo/IS Round67.png" class="icon" alt=" " />
                    IS Round67
            </button>

            <button onclick="showTab('tab7', this)">
                <img src="image/Logo/Report IS Round.png" class="icon" alt=" " />
                    Report IS Round
            </button>

            <button onclick="showTab('tab8', this)">
                <img src="image/Logo/About.png" class="icon" alt=" " />
                    About
            </button>

            <button onclick="showTab('tab9', this)">
                <img src="image/Logo/App Gallery.png" class="icon" alt=" " />
                    App Gallery
            </button>
        </div>
            <!-- <div class="content">
                <div id="tab1" class="tabcontent active">
                    <h2>หน้าแรก</h2>
                    <p>นี่คือเนื้อหาของหน้าแรกที่แสดงโดยไม่โหลดหน้าใหม่</p>
                </div>
            <div id="tab2" class="tabcontent">
                <h2>รายการ</h2>
                <p>นี่คือเนื้อหาของแท็บรายการ</p>
            </div>
            <div id="tab3" class="tabcontent">
            <h2>ตั้งค่า</h2>
            <p>นี่คือเนื้อหาของแท็บตั้งค่า</p>
            </div>
        </div>

    <script>
        function showTab(tabId, btn) {
            document.querySelectorAll('.tabcontent').forEach(tab => tab.classList.remove('active'));
            document.getElementById(tabId).classList.add('active');

            document.querySelectorAll('.sidebar button').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
        }

    </script>
     -->
</body>

</html>