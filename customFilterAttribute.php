<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

section{
width: 100%;
height:50%;
background-color:grey;
}
    .filter-container {
        width: 100%;
        height: 200px;

        padding: 10px;

    }

    h3 {
        font-weight: 900;
    }

    .filter-container>div {
        
        margin-left: 50px;
        display: flex;
    }

    .filter-container>div>div {
        padding: 10px;
    }

    #filter-input-sec {
        display: flex;
        flex-wrap: wrap;

    }

    .filter-container select {
        height: 50px;
        width: 240px;
        border-radius: 0.3rem;
        font-size: 19px;
    }

    .filter-container select>option {
        font-size: 20px;

    }

    .filter-container input {
        height: 50px;
        width: 100px;
        color: white;
        border: none;
        border-radius: 0.2rem;

    }

    .filter-container .filterApplyBtn {
        background-color: #2186EA;
width: 110px;
    }

    .filter-container .filterClearBtn {
        background-color: #708090;
width: 110px;
    }

    .filterBtnActive:active {
        transform: scale(0.9);
    }
</style>

</head>

<body>
    <form class="filter-container" action="/Excavator-Attachment Selector" method="get">
        <div>
            <h3>Select your Excavator Make/Model</h3>
        </div>
        <div id="filter-input-sec">
            <div>
                <select name="Manufacturer" id="filter1">
                    <option value="">Select Make</option>
<option value="Bobcat">Bobcat</option>
<option value="Case">Case</option>
<option value="Caterpillar">Caterpillar</option>
<option value="Doosan">Doosan</option>
<option value="Hitachi">Hitachi</option>
<option value="JCB">JCB</option>
<option value="Kobelco">Kobelco</option>
<option value="Komatsu">Komatsu</option>
<option value="Kubota">Kubota</option>
<option value="Sany">Sany</option>
<option value="Takeuchi">Takeuchi</option>
<option value="Terex">Terex</option>
<option value="Volvo">Volvo</option>
<option value="WackerNeuson">Wacker Neuson</option>
<option value="Yanmar">Yanmar</option>

                </select>
            </div>
            <div>
                <select name="Model" id="filter2" disabled>
                    <option value="" selected>Select Model</option>

                </select>
            </div>
            <div>
                <input type='submit' class="filterApplyBtn " disabled value="Search" name="Apply">
            </div>
            <div>
                <input type='submit' class="filterClearBtn" disabled value="Clear" name="Clear">

            </div>
        </div>
        <div>

        </div>
    </form>

</body>
<script>
    // localStorage.setItem("name", "John Doe");
    let applybtn = document.querySelector('.filterApplyBtn');
    let clearbtn = document.querySelector('.filterClearBtn');
    applybtn.disabled = true;
    clearbtn.disabled = true;
    document.querySelector('#filter1').addEventListener('input', (e) => {

       
        if (applybtn.disabled) {
            applybtn.classList.remove('filterBtnActive');
            clearbtn.classList.remove('filterBtnActive');

        }
        checking(e.target.value)


    })
    // another function
    function checking(agru) {
        if (agru != '') {

            let filter2 = document.querySelector('#filter2');
            filter2.disabled = false;

            let obj = {

                Bobcat: ['E10', 'E17', 'E17z', 'E19', 'E20z', 'E26', 'E27', 'E34', 'E35z'
								, 'E45', 'E50', 'E55', 'E62', 'E85', 'X225', 'X231', 'X325', 'X328', 'x331'],
							Case: ['CX17C', 'CX19C', 'CX26C', 'CX30C', 'CX37C', 'CX57C', 'CX60C', 'CX85C', 'CX90C', 'CX130C', 'CX145DSR', 'CX180D', 'CX210D'],
							Caterpillar: ['300.9D', '301.5', '301.6', '301.7CR', '301.8', '302.CR', '302.7D CR', '303E CR', '305.5E2 CR', '306 CR', '307.5', '308 CR', '309 CR'
								, '310', '311F', '314 GC', '313', '313F GC', '313', '313F GC', '315', '316F L', '320GC'],
							Daewoo: ['SOLAR 027', 'SOLAR 030', 'SOLAR 030 PLUS', 'SOLAR 035', 'SOLAR 035 PLUS', 'SOLAR 30', 'SOLAR 35'],

							Doosan: ['DX10Z', 'DX17Z', 'DX19', 'DX27Z', 'DX35Z', 'DX57W-5', 'DX3R-3', 'DX63-3', 'DX85R-3', 'DX140LC-5', 'DX140LCR-5', 'DX160LC-5', 'DX180LC-5', 'DX225LC-5'],
							Hitachi: ['ZX10U', 'ZX17U', 'ZX19', 'ZX26U', 'ZX33U', 'ZX38U', 'ZX48U', 'ZX55U', 'ZX65U', 'ZX85U', 'ZX130', 'ZX160', 'ZX220'],

							Kubota: ['U008', 'U10-3/U10-5', 'U17-3', 'KX016-4', 'KX019-4', 'U20-3', 'U27-4', 'KX030-4', 'U36-4', 'KX018-4', 'KX042', 'U50', 'KX037-4', 'KX060', 'KX080'],
							WackerNeuson: ['803', 'ET16', 'ET18', 'ET20', 'ET24', 'ET35', 'ET42', 'ET65', 'ET90', 'ET145', 'EZ17', 'EZ26', 'EZ36', 'EZ50', 'EZ53', 'EZ80'],
							Takeuchi: ['TB014', 'TB016', 'TB125', 'TB175', 'TB175W', 'TB210R', 'TB216', 'TB217R', 'TB219', 'TB225', 'TB23R', 'TB250', 'TB285', 'TB290', 'TB295W', 'TB30', 'TB30R', 'TB2150'],
							JCB: ['8008', '15C-1', '16C-1', '18Z-1', '19C-1', '8010', '8025', '8026', '8030', '8035', '48Z', '51R', '55Z', '57C', '85Z', '8014', '8018', '8025', '8030', 'JS145', 'JS130', 'JS220', '130X', '140X', '150X'],
							Sany: ['SY16C', 'SY20C', 'SY50U', 'SY55C', 'SY80U', 'SY75C', 'SY155W', 'SY155U', 'SY135C'],
							Komatsu: ['PC09', 'PC14R', 'PC16R', 'PC18MR', 'PC22MR', 'PC26MR', 'PC30MR', 'PC35MR', 'PC45MR', 'PC55MR', 'PC58MR', 'PC80MR', 'PC88MR'],
							Volvo: ['EC15', 'EC18', 'EC20', 'ECR25', 'EC27', 'EC35', 'ECR40', 'ECR50', 'EC60', 'EW60', 'ECR88', 'EC140', 'EC220'],
							Kobelco: ['SK08', 'SK10SR', 'SK17SR', 'SK18', 'SK22', 'SK25', 'SK26', 'SK28SR', 'SK30SR', 'SK35SR', 'SK45', 'SK55', 'SK75', 'SK85', 'SK130', 'SK140', 'SK210'],
							Yanmar: ['VIO12', 'VIO17', 'VIO20', 'VIO25', 'VIO30', 'VIO35', 'VIO50', 'VIO55', 'VIO80', 'VIO82', 'SV08', 'SV15', 'SV16', 'SV17', 'SV18', 'SV20', 'SV22', 'SV26', 'SV60'],
							Terex: ['TC10', 'TC15', 'TC16', 'TC19', 'TC20', 'TC22', 'TC25', 'TC29', 'TC35', 'TC37', 'TC48', 'TC50', 'TC60', 'TC75', 'TC85']

            };
            for (const key in obj) {
                if (agru == key) {

                    // console.log(obj[key]);
                    filter2.innerHTML = '';
                    filter2.innerHTML = `<option value="">Select Model</option>`;
                    obj[key].forEach(e => {
                        let opt = `<option value="${e}">${e}</option>`;

                        filter2.insertAdjacentHTML('beforeend', opt)

                    });

                }

            }

            filter2.addEventListener('input', () => {
                if (filter2.value != '') {

                    applybtn.disabled = false;
                    clearbtn.disabled = false;

                    applybtn.classList.add('filterBtnActive');
                    clearbtn.classList.add('filterBtnActive');

                    // neew code to store filter value
                    applybtn.addEventListener('click', (e) => {
                        // e.preventDefault();
                        // console.log(filter2.value,filter1.value)
                        // localStorage.setItem('filter1',JSON.stringify("ok"))
                        window.localStorage.setItem("filter1", JSON.stringify(filter1.value));
                        window.localStorage.setItem("filter2", JSON.stringify(filter2.value));

                    })

                }
            });

        } else {
            filter2.disabled = true;
            filter2.innerHTML = '';
            filter2.innerHTML = `<option value="">please select</option>`;
        }
    }

    // this function will clear the  local storage value
    clearbtn.addEventListener('click', () => {
        // localStorage.setItem('filter1',JSON.stringify("ok"))
        window.localStorage.removeItem("filter1", filter1.value);
        window.localStorage.removeItem("filter2", filter2.value);
        window.location.assign('https://mousevalley.com/')

    })
    // function to set value
    function setval() {
        let newval = JSON.parse(localStorage.getItem('filter1'));
        let newval2 = JSON.parse(localStorage.getItem('filter2'));

        if (newval != null && newval2 != null) {
        console.log(newval);

            document.querySelector('#filter1').value = newval
            checking(newval);
            document.querySelector('#filter2').value = newval2;

            applybtn.disabled = false;
            clearbtn.disabled = false;

        }
    }
    setval();

</script>
