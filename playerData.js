teamName = [
    {
        "teamName":"Manchester City",
        "players":[
            {
                "name":"Claudio Bravo",
                "nationality":"Chile",
                "position":"Goalkeeper",
                "image":"p33148"
            },
            {
                "name": "Kyle Walker",
                "nationality":"England",
                "position":"Defender",
                "image":"p58621"
            },
            {
                "name":"Danilo",
                "nationality":"Brazil",
                "position":"Defender",
                "iamge":"p100180"
            },
            {
                "name":"Vincent Kompany",
                "nationality":"Belgium",
                "position":"Defender",
                "image":"p17476"
            },
            {
                "name":"John Stones",
                "nationality":"England",
                "position":"Defender",
                "image":"p97299"
            },
            {
                "name":"Kevin De Brune",
                "nationality":"Belgium",
                "position":"Midfielder",
                "image":"p61366"
            },
            {
                "name":"Fabian Delph",
                "nationality":"England",
                "position":"Midfielder",
                "image":"p41823"
            },
            {
                "name":"Bernardo Silva",
                "nationality":"Portugal",
                "position":"Midfielder",
                "image":"p165809"
            },
            {
                "name":"David Silva",
                "nationality":"Spain",
                "position":"Midfielder",
                "image":"p20664"
            },
            {
                "name":"Raheem Sterling",
                "nationality":"England",
                "position":"Forward",
                "image":"p103955"
            },
            {
                "name":"Sergio Aguero",
                "nationality":"Argentina",
                "position":"Forward",
                "image":"p37572"
            },
            {
                "name":"Leroy Sane",
                "nationality":"Germany",
                "position":"Forward",
                "image":"p182156"
            }
        ]
    },
    {
        "teamName":"Liverpool",
        "players":[
            {
                "name":"Simon Mignolet",
                "nationality":"Belgium",
                "position":"Goalkeeper",
                "image":"p66797"
            },
            {
                "name":"Nathaniel Clyne",
                "nationality":"England",
                "position":"Defender",
                "image":"p57328"
            },
            {
                "name":"Georginio Wijnaldum",
                "nationality":"Netherlands",
                "position":"Midfielder",
                "image":"p41733"
            },
            {
                "name":"Roberto Firmino",
                "nationality":"Brazil",
                "position":"Forward",
                "image":"p92217"
            }
        ]
    }
]

users = [
    {
        email: "drjames@bsu.edu",
        password: "Paz"
    },
    {
        email: "manoonan@bsu.edu",
        password: "Noonja"
    },
    {
        email: "tdmiller7@bsu.edu",
        password: "Vermont"
    },
    {
        email: "mjdryer@bsu.edu",
        password: "Pepper"
    }
]

function search(name){
    possible = []
    for(var i = 0; i < teamName.length; i++){
        for(var j =0; j < teamName[i].players.length;j++){
            playername = teamName[i].players[j].name
            if(playername.toLowerCase().includes(name)){
                possible.push(playername)
            } 
        }
    }

    if(possible.length==1){
        window.location = "playerStats.php?player="+possible[0]
    }else{
        string = "Possible Matches\n\n\n"
        for(var i = 0; i < possible.length;i++){
            string = string + possible[i] + "\n"
        }
        alert(string)
    }
}