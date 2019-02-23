<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Star War Character List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bulma-0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="myscript.js"></script>
</head>
<body class="has-background-dark">
    <section class="section" id="simple-search">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <input class="input" type="text" placeholder="Search here.." id="search-input" name='search_input'>
                    </div>
                    <div class="level-item">
                        <button class="button is-light" id="search-btn" name='simpleSearch'>
                            Search
                        </button>
                    </div>
                    <div class='level-item'>
                        <button class="button is-light" id="advance-show-btn">
                            Advanced Search
                        </button>
                    </div>
                    <div class='level-item'>
                        <a href="form.php" class='button is-light'>Add Data</a>
                    </div>
                </div>  
            </div>
        </div>
    </section>

    <section class="section" id="advanced-search">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <div class="level-item" id="div-name">
                        Name <input class="input" type="text" id="search-name" name='name'>
                    </div> 
                    <div class="level-item">
                        Height
                        <div class="select">
                            <select id="search-height" name='height'>
                                <option value="all" selected> All </option>
                                <option value=99> < 100 </option>
                                <option value=199> 100-200 </option>
                                <option value=200> > 200 </option>
                            </select>
                        </div>
                    </div>
                    <div class="level-item">
                        Mass
                        <div class="select">
                            <select id="search-mass" name='mass'>
                                <option value="all" selected> All </option>
                                <option value=99> < 100 </option>
                                <option value=100> > 100</option>
                            </select>
                        </div>
                    </div>

                    <div class="level-item" id="div-hair">
                        Hair Color <input class="input" type="text" id="search-hair" name='hair'>
                    </div>

                    <div class="level-item" id="div-skin">
                        Skin Color <input class="input" type="text" id="search-skin" name='skin'>
                    </div>

                    <div class="level-item" id="div-eye">
                        Eye Color <input class="input" type="text" id="search-eye" name='eye'>
                    </div>

                    <div class="level-item">
                        Gender
                        <div class="select">
                            <select id="search-gender" name='gender'>
                                <option value="all" selected> All </option>
                                <option value="male"> Male </option>
                                <option value="female"> Female </option>
                            </select>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="level-left">
                <div class="level-item">
                    <button class="button is-light" id="advance-search-btn" name='advSearch'>
                        Search
                    </button>
                </div>
                <div class="level-item">
                    <button class="button is-light" id="simple-show-btn">
                        Simple Search
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Resource File: 
                <a href="https://swapi.co/api/people/">https://swapi.co/api/people/</a>
            </h2>
        </div>
        <div class="container" style="background: white">
            <table class="table is-fullwidth" id='summaryOfResults'>
                <tbody id="body">
                    <tr id="test">
                        <th>#</th>
                        <th>Name</th>
                        <th>Height</th>
                        <th>Mass</th>
                        <th>Hair Color</th>
                        <th>Skin Color</th>
                        <th>Eye Color</th>
                        <th>Birth Year</th>
                        <th>Gender</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>