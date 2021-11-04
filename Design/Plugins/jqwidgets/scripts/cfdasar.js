$(document).ready(function () {
            // set jQWidgets Theme to "Bootstrap"
            $.jqx.theme = "bootstrap";
            $('#sendButton').jqxButton({ height: 25 });
            // create jqxInput widget.
            $('input').jqxInput({ height: 22, width: '100%' });
            $('input').css('margin-top', '5px');
            // create countries array for the Countries ComboBox.
            var countries = [
                { value: "AF", label: "Afghanistan" },
                { value: "AL", label: "Albania" },
                { value: "DZ", label: "Algeria" },
                { value: "AS", label: "American Samoa" },
                { value: "AD", label: "Andorra" },
                { value: "AO", label: "Angola" },
                { value: "AI", label: "Anguilla" },
                { value: "AQ", label: "Antarctica" },
                { value: "AG", label: "Antigua and Barbuda" },
                { value: "AR", label: "Argentina" },
                { value: "AM", label: "Armenia" },
                { value: "AW", label: "Aruba" },
                { value: "AU", label: "Australia" },
                { value: "AT", label: "Austria" },
                { value: "AZ", label: "Azerbaijan" },
                { value: "BS", label: "Bahamas" },
                { value: "BH", label: "Bahrain" },
                { value: "BD", label: "Bangladesh" },
                { value: "BB", label: "Barbados" },
                { value: "BY", label: "Belarus" },
                { value: "BE", label: "Belgium" },
                { value: "BZ", label: "Belize" },
                { value: "BJ", label: "Benin" },
                { value: "BM", label: "Bermuda" },
                { value: "BT", label: "Bhutan" },
                { value: "BO", label: "Bolivia" },
                { value: "BA", label: "Bosnia and Herzegovina" },
                { value: "BW", label: "Botswana" },
                { value: "BV", label: "Bouvet Island" },
                { value: "BR", label: "Brazil" },
                { value: "BN", label: "Brunei" },
                { value: "BG", label: "Bulgaria" },
                { value: "BF", label: "Burkina Faso" },
                { value: "BI", label: "Burundi" },
                { value: "KH", label: "Cambodia" },
                { value: "CM", label: "Cameroon" },
                { value: "CA", label: "Canada" },
                { value: "CV", label: "Cape Verde" },
                { value: "KY", label: "Cayman Islands" },
                { value: "CF", label: "Central African Republic" },
                { value: "TD", label: "Chad" },
                { value: "CL", label: "Chile" },
                { value: "CN", label: "China" },
                { value: "CX", label: "Christmas Island" },
                { value: "CC", label: "Cocos (Keeling) Islands" },
                { value: "CO", label: "Columbia" },
                { value: "KM", label: "Comoros" },
                { value: "CG", label: "Congo" },
                { value: "CK", label: "Cook Islands" },
                { value: "CR", label: "Costa Rica" },
                { value: "CI", label: "Cote D'Ivorie" },
                { value: "HR", label: "Croatia (Hrvatska)" },
                { value: "CU", label: "Cuba" },
                { value: "CY", label: "Cyprus" },
                { value: "CZ", label: "Czech Republic" },
                { value: "DK", label: "Denmark" },
                { value: "DJ", label: "Djibouti" },
                { value: "DM", label: "Dominica" },
                { value: "DO", label: "Dominican Republic" },
                { value: "TP", label: "East Timor" },
                { value: "EC", label: "Ecuador" },
                { value: "EG", label: "Egypt" },
                { value: "SV", label: "El Salvador" },
                { value: "GQ", label: "Equatorial Guinea" },
                { value: "ER", label: "Eritrea" },
                { value: "EE", label: "Estonia" },
                { value: "ET", label: "Ethiopia" },
                { value: "FO", label: "Faroe Islands" },
                { value: "FJ", label: "Fiji" },
                { value: "FI", label: "Finland" },
                { value: "FR", label: "France" },
                { value: "GF", label: "French Guinea" },
                { value: "PF", label: "French Polynesia" },
                { value: "GA", label: "Gabon" },
                { value: "GM", label: "Gambia" },
                { value: "GE", label: "Georgia" },
                { value: "DE", label: "Germany" },
                { value: "GH", label: "Ghana" },
                { value: "GI", label: "Gibraltar" },
                { value: "GR", label: "Greece" },
                { value: "GL", label: "Greenland" },
                { value: "GD", label: "Grenada" },
                { value: "GP", label: "Guadeloupe" },
                { value: "GU", label: "Guam" },
                { value: "GT", label: "Guatemala" },
                { value: "GN", label: "Guinea" },
                { value: "GW", label: "Guinea-Bissau" },
                { value: "GY", label: "Guyana" },
                { value: "HT", label: "Haiti" },
                { value: "HN", label: "Honduras" },
                { value: "HK", label: "Hong Kong" },
                { value: "HU", label: "Hungary" },
                { value: "IS", label: "Iceland" },
                { value: "IN", label: "India" },
                { value: "ID", label: "Indonesia" },
                { value: "IR", label: "Iran" },
                { value: "IQ", label: "Iraq" },
                { value: "IE", label: "Ireland" },
                { value: "IL", label: "Israel" },
                { value: "IT", label: "Italy" },
                { value: "JM", label: "Jamaica" },
                { value: "JP", label: "Japan" },
                { value: "JO", label: "Jordan" },
                { value: "KZ", label: "Kazakhstan" },
                { value: "KE", label: "Kenya" },
                { value: "KI", label: "Kiribati" },
                { value: "KW", label: "Kuwait" },
                { value: "KG", label: "Kyrgyzstan" },
                { value: "LA", label: "Laos" },
                { value: "LV", label: "Latvia" },
                { value: "LB", label: "Lebanon" },
                { value: "LS", label: "Lesotho" },
                { value: "LR", label: "Liberia" },
                { value: "LY", label: "Libya" },
                { value: "LI", label: "Liechtenstein" },
                { value: "LT", label: "Lithuania" },
                { value: "LU", label: "Luxembourg" },
                { value: "MO", label: "Macau" },
                { value: "MK", label: "Macedonia" },
                { value: "MG", label: "Madagascar" },
                { value: "MW", label: "Malawi" },
                { value: "MY", label: "Malaysia" },
                { value: "MV", label: "Maldives" },
                { value: "ML", label: "Mali" },
                { value: "MT", label: "Malta" },
                { value: "MH", label: "Marshall Islands" },
                { value: "MQ", label: "Martinique" },
                { value: "MR", label: "Mauritania" },
                { value: "MU", label: "Mauritius" },
                { value: "YT", label: "Mayotte" },
                { value: "MX", label: "Mexico" },
                { value: "FM", label: "Micronesia" },
                { value: "MD", label: "Moldova" },
                { value: "MC", label: "Monaco" },
                { value: "MN", label: "Mongolia" },
                { value: "MS", label: "Montserrat" },
                { value: "MA", label: "Morocco" },
                { value: "MZ", label: "Mozambique" },
                { value: "MM", label: "Myanmar (Burma)" },
                { value: "NA", label: "Namibia" },
                { value: "NR", label: "Nauru" },
                { value: "NP", label: "Nepal" },
                { value: "NL", label: "Netherlands" },
                { value: "AN", label: "Netherlands Antilles" },
                { value: "NC", label: "New Caledonia" },
                { value: "NZ", label: "New Zealand" },
                { value: "NI", label: "Nicaragua" },
                { value: "NE", label: "Niger" },
                { value: "NG", label: "Nigeria" },
                { value: "NU", label: "Niue" },
                { value: "NF", label: "Norfolk Island" },
                { value: "KP", label: "North Korea" },
                { value: "NO", label: "Norway" },
                { value: "OM", label: "Oman" },
                { value: "PK", label: "Pakistan" },
                { value: "PW", label: "Palau" },
                { value: "PA", label: "Panama" },
                { value: "PG", label: "Papua New Guinea" },
                { value: "PY", label: "Paraguay" },
                { value: "PE", label: "Peru" },
                { value: "PH", label: "Philippines" },
                { value: "PN", label: "Pitcairn" },
                { value: "PL", label: "Poland" },
                { value: "PT", label: "Portugal" },
                { value: "PR", label: "Puerto Rico" },
                { value: "QA", label: "Qatar" },
                { value: "RE", label: "Reunion" },
                { value: "RO", label: "Romania" },
                { value: "RU", label: "Russia" },
                { value: "RW", label: "Rwanda" },
                { value: "SH", label: "Saint Helena" },
                { value: "KN", label: "Saint Kitts and Nevis" },
                { value: "LC", label: "Saint Lucia" },
                { value: "SM", label: "San Marino" },
                { value: "SA", label: "Saudi Arabia" },
                { value: "SN", label: "Senegal" },
                { value: "SC", label: "Seychelles" },
                { value: "SL", label: "Sierra Leone" },
                { value: "SG", label: "Singapore" },
                { value: "SK", label: "Slovak Republic" },
                { value: "SI", label: "Slovenia" },
                { value: "SB", label: "Solomon Islands" },
                { value: "SO", label: "Somalia" },
                { value: "ZA", label: "South Africa" },
                { value: "GS", label: "South Georgia" },
                { value: "KR", label: "South Korea" },
                { value: "ES", label: "Spain" },
                { value: "LK", label: "Sri Lanka" },
                { value: "SD", label: "Sudan" },
                { value: "SR", label: "Suriname" },
                { value: "SZ", label: "Swaziland" },
                { value: "SE", label: "Sweden" },
                { value: "CH", label: "Switzerland" },
                { value: "SY", label: "Syria" },
                { value: "TW", label: "Taiwan" },
                { value: "TJ", label: "Tajikistan" },
                { value: "TZ", label: "Tanzania" },
                { value: "TH", label: "Thailand" },
                { value: "TG", label: "Togo" },
                { value: "TK", label: "Tokelau" },
                { value: "TO", label: "Tonga" },
                { value: "TT", label: "Trinidad and Tobago" },
                { value: "TN", label: "Tunisia" },
                { value: "TR", label: "Turkey" },
                { value: "TM", label: "Turkmenistan" },
                { value: "TC", label: "Turks and Caicos Islands" },
                { value: "TV", label: "Tuvalu" },
                { value: "UG", label: "Uganda" },
                { value: "UA", label: "Ukraine" },
                { value: "AE", label: "United Arab Emirates" },
                { value: "UK", label: "United Kingdom" },
                { value: "US", label: "United States" },
                { value: "UY", label: "Uruguay" },
                { value: "UZ", label: "Uzbekistan" },
                { value: "VU", label: "Vanuatu" },
                { value: "VA", label: "Vatican City (Holy See)" },
                { value: "VE", label: "Venezuela" },
                { value: "VN", label: "Vietnam" },
                { value: "VG", label: "Virgin Islands (British)" },
                { value: "VI", label: "Virgin Islands (US)" },
                { value: "WF", label: "Wallis and Futuna Islands" },
                { value: "EH", label: "Western Sahara" },
                { value: "WS", label: "Western Samoa" },
                { value: "YE", label: "Yemen" },
                { value: "YU", label: "Yugoslavia" },
                { value: "ZM", label: "Zambia" },
                { value: "ZW", label: "Zimbabwe" }
            ];
            // create Countries ComboBox.
            $("#billingCountries").jqxComboBox({ enableBrowserBoundsDetection: true, promptText: "Select a Country:", source: countries, height: 22, width: '100%' });
            // create Accept Terms Checkbox.
            $("#acceptTerms").jqxCheckBox({ width: '100%' });
            // create the Birth Date Calendar.
            $("#birthDate").jqxDateTimeInput({ enableBrowserBoundsDetection: true, width: '100%', height: 24 });
            // create the Cart Type ComboBox.
            var cardTypes = [{ value: "visa", label: "Visa" }, { value: "masterCard", label: "MasterCard" }, { value: "americanExpress", label: "American Express" }, { value: "discover", label: "Discover" }];
            $("#cardType").jqxComboBox({ enableBrowserBoundsDetection: true, selectedIndex: 0, autoDropDownHeight: true, promptText: "Card Type:", source: cardTypes, width: '100%', height: 22 });
            var months = [
               { value: "01", label: "01 - January" },
               { value: "02", label: "02 - February" },
               { value: "03", label: "03 - March" },
               { value: "04", label: "04 - April" },
               { value: "05", label: "05 - May" },
               { value: "06", label: "06 - June" },
               { value: "07", label: "07 - July" },
               { value: "08", label: "08 - August" },
               { value: "09", label: "09 - September" },
               { value: "10", label: "10 - October" },
               { value: "11", label: "11 - November" },
               { value: "12", label: "12 - December" }
            ];
            var years = [
                { value: "2014", label: "2014" },
                { value: "2015", label: "2015" },
                { value: "2016", label: "2016" },
                { value: "2017", label: "2017" },
                { value: "2018", label: "2018" },
                { value: "2019", label: "2019" },
                { value: "2020", label: "2020" }
            ];
            // Create Expiration Date & Year ComboBoxes.
            $("#expirationDate").jqxComboBox({ enableBrowserBoundsDetection: true, source: months, selectedIndex: 0, height: 22, width: '100%' });
            $("#expirationYear").jqxComboBox({ enableBrowserBoundsDetection: true, source: years, autoDropDownHeight: true, selectedIndex: 0, height: 22, width: '100%' });
            // Create the Form Validator. 
            $('#form').jqxValidator({
                hintType: 'label',
                rules: [
                       { input: '#firstName', message: 'First Name is required!', action: 'keyup, blur', rule: 'required' },
                       { input: '#lastName', message: 'Last Name is required!', action: 'keyup, blur', rule: 'required' },
                       { input: '#billingAddress', message: 'Billing Address is required!', action: 'keyup, blur', rule: 'required' },
                       { input: '#billingCity', message: 'Billing City is required!', action: 'keyup, blur', rule: 'required' },
                       { input: '#billingZipCode', message: 'Zip Code is required!', action: 'keyup, blur', rule: 'required' },
                       { input: '#cardNumber', message: 'Card Number is required!', action: 'keyup, blur', rule: 'required' },
                       { input: '#securityCode', message: 'Security Code is required!', action: 'keyup, blur', rule: 'required' },
                       { input: '#acceptTerms', message: 'You need to accept the terms!', action: 'keyup, blur', rule: 'required' }
                ]
            });
            // Validate form.
            $("#sendButton").click(function () {
                var validationResult = function (isValid) {
                    if (isValid) {
                        $("#form").submit();
                    }
                }
                $('#form').jqxValidator('validate', validationResult);
            });
            // prepare chart data as an array
            var sampleData = [
                    { Day: 'Monday', Running: 30, Swimming: 0, Cycling: 25, Goal: 40 },
                    { Day: 'Wednesday', Running: 30, Swimming: 0, Cycling: 25, Goal: 60 },
                    { Day: 'Friday', Running: 0, Swimming: 20, Cycling: 25, Goal: 50 },
                    { Day: 'Sunday', Running: 20, Swimming: 40, Cycling: 0, Goal: 90 }
            ];
            // prepare jqxChart settings
            var settings = {
                borderLineWidth: 0,
                title: "Fitness & exercise weekly scorecard",
                description: "Time spent in vigorous exercise by activity",
                enableAnimations: true,
                showLegend: true,
                padding: { left: 5, top: 5, right: 5, bottom: 5 },
                titlePadding: { left: 30, top: 0, right: 0, bottom: 10 },
                source: sampleData,
                categoryAxis:
                    {
                        text: 'Category Axis',
                        textRotationAngle: 0,
                        dataField: 'Day',
                        showTickMarks: true,
                        tickMarksInterval: 1,
                        tickMarksColor: '#888888',
                        unitInterval: 1,
                        showGridLines: false,
                        gridLinesInterval: 1,
                        gridLinesColor: '#888888',
                        axisSize: 'auto'
                    },
                colorScheme: 'scheme05',
                seriesGroups:
                    [
                        {
                            type: 'splinearea',
                            valueAxis:
                            {
                                unitInterval: 20,
                                minValue: 0,
                                maxValue: 100,
                                displayValueAxis: false,
                                description: 'Goal in minutes',
                                axisSize: 'auto',
                                tickMarksColor: '#888888'
                            },
                            series: [
                                    { dataField: 'Goal', displayText: 'Personal Goal', opacity: 0.7 }
                            ]
                        },
                        {
                            type: 'stackedcolumn',
                            columnsGapPercent: 100,
                            seriesGapPercent: 5,
                            valueAxis:
                            {
                                unitInterval: 20,
                                minValue: 0,
                                maxValue: 100,
                                displayValueAxis: true,
                                description: 'Time in minutes',
                                axisSize: 'auto',
                                tickMarksColor: '#888888',
                                gridLinesColor: '#777777'
                            },
                            series: [
                                    { dataField: 'Running', displayText: 'Running' },
                                    { dataField: 'Swimming', displayText: 'Swimming' },
                                    { dataField: 'Cycling', displayText: 'Cycling' }
                            ]
                        }
                    ]
            };
            // setup the chart
            $('#chart').jqxChart(settings);
            // prepare DataTable data.
            var data = new Array();
            var firstNames = ["Nancy", "Andrew", "Janet", "Margaret", "Steven", "Michael", "Robert", "Laura", "Anne"];
            var lastNames = ["Davolio", "Fuller", "Leverling", "Peacock", "Buchanan", "Suyama", "King", "Callahan", "Dodsworth"];
            var titles = ["Sales Representative", "Vice President, Sales", "Sales Representative", "Sales Representative", "Sales Manager", "Sales Representative", "Sales Representative", "Inside Sales Coordinator", "Sales Representative"];
            var k = 0;
            for (var i = 0; i < firstNames.length; i++) {
                var row = {};
                row["firstname"] = firstNames[k];
                row["lastname"] = lastNames[k];
                row["title"] = titles[k];
                data[i] = row;
                k++;
            }
            var source =
            {
                localData: data,
                dataType: "array"
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            // create DataTable.
            $("#dataTable").jqxDataTable(
            {
                width: '100%',
                height: '100%',
                source: dataAdapter,
                sortable: true,
                columns: [
                      { text: 'First Name', dataField: 'firstname', width: '30%' },
                      { text: 'Last Name', dataField: 'lastname', width: '30%' },
                      { text: 'Title', dataField: 'title' }
                ]
            });
            $("#myTab").tab();
            $('.pane:nth-child(2)').hide();
            $('.pane:nth-child(3)').hide();
            $('#myTab a').click(function (e) {
                e.preventDefault();
                $('.pane').hide();
                $('#myTab li').removeClass('active');
                var id = $(this).attr('data-tab');
                $("#" + id).show();
                // notifies the widgets that a resize is required and forces a redraw. $.jqx.resize is called for better UX when navigating through tabs.
                $.jqx.resize();
                $(this).parent().addClass('active');
            })
        });