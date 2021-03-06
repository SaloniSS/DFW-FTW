var childLocations = [
    {lat: 32.783432, lng: -96.805183, label: "Dallas World Aquarium"},
    {lat: 32.7405, lng: -96.8162, label: "Dallas Zoo"},
    {lat: 32.7869, lng: -96.8066, label: "Perot Museum of Nature and Science"},
    {lat: 32.775710, lng: -96.760071, label: "Texas Discovery Garden & Butterfly Garden"},
    {lat: 32.8599, lng: -96.7515, label: "Dallas Children’s Theater"},
    {lat: 32.6832, lng: -96.8530, label: "Bahama Beach Waterpark"},
    {lat: 32.8850, lng: -96.8997, label: "SpeedZone Dallas"},
    {lat: 32.8211, lng: -96.7169, label: "Dallas Arboretum"},
    {lat:32.721226, lng:-97.356143, label: "Fort Worth Zoo"},
    {lat:32.743806, lng:97.3692, label: "Noble Planetarium"},
    {lat:32.7811, lng:-97.3891, label: "Front Porch Pottery"},
    {lat:32.941856, lng:-97.060476, label: "Great Wolf Lodge"},
    {lat:32.966449, lng:-97.043764, label: "SeaLIFE Aquarium"},
    {lat:32.9663, lng:-97.0433, label: "Lego Discovery Center"},
    {lat:32.9647, lng:-97.0437, label: "The Escape Room"},
    {lat:32.9338, lng:-97.0780, label: "Grapevine Vintage Railroad"},
    {lat:50.948516, lng:-1.552481, label: "Peppa Pig World"},
    {lat:32.7552, lng:-97.0712, label: "Six Flags Over Texas"},
    {lat:32.6770, lng:-97.1413, label: "Alley Cats Entertainment Center"},
    {lat:32.7514, lng:-97.0695, label: "International Bowling Museum & Hall of Fame"},
    {lat:32.7619, lng:-97.0829, label: "Hurricane Harbor"},
    {lat:32.7835, lng:-97.1152, label: "River Legacy Living Science Center"},
    {lat:33.1438, lng:-96.8353, label: "Sci-Tech Discovery"},
    {lat:33.1435, lng:-96.8353, label: "National Videogame Museum"},
    {lat:32.7605, lng:-97.0037, label: "Louis Tussaud’s Palace of Wax"},
    {lat:32.635628, lng:-97.044252, label: "Green Meadows Petting Farm"},
    {lat:33.1583, lng:-96.6157, label: "Heard Natural Science Museum & Wildlife Sanctuary"},
    {lat:33.1159, lng:-96.8372, label: "Play Street Museum"}
]

var artLocations = [
    {lat:32.7876, lng:-96.8009, label: "Dallas Museum of Art"},
    {lat:32.7880, lng:-96.7997, label: "Crow Museum of Asian Art"},
    {lat:32.7791, lng:-96.7644, label: "African American Museum of Dallas"},
    {lat:32.8654, lng:-96.7087, label: "Dutch Art Gallery"},
    {lat:32.8041, lng:-96.8031, label: "Museum of Geometric and MADI Art"},
    {lat:32.7882, lng:-96.8002, label: "Nasher Sculpture Center"},
    {lat:32.7882, lng:-96.8002, label: "Nasher Sculpture Center"},
    {lat:32.7905, lng:-96.8229, label: "Dallas Contemporary"},
    {lat:32.947257, lng:-96.827711, label: "The Warehouse"},
    {lat: 32.783737, lng: -96.770952, label: "500 X Gallery"},
    {lat: 32.803559, lng: -96.780258, label: "Kirk Hopper Fine Art Gallery "},
    {lat: 32.7719, lng: -96.7898, label: "Ro2"},
    {lat: 32.805525, lng: -96.802569, label: "Afterimage"},
    {lat: 32.796613, lng: -96.803991, label: "David Dike"},
    {lat: 32.791017, lng: -96.818605, label: "Barry Whistler"},
    {lat: 32.792463, lng: -96.818244, label: "Carneal SImmons Contemporary"},
    {lat: 32.787252, lng: -96.816834, label: "Craighead-Green"},
    {lat: 32.7901, lng: -96.8221, label: "PDNB Gallery"},
    {lat: 32.7230, lng: -97.4469, label: "Rebecca Low Gallery"},
    {lat: 32.7486, lng: -97.3649, label: "Kimbell Art Museum"},
    {lat: 32.7490, lng: -97.3630, label: "Modern Art Museum of Fort Worth"},
    {lat: 32.7479, lng: -97.3684, label: "Amon Carter Museum of American Art"},
    {lat: 32.7555, lng: -97.3316, label: "Sid Richardson Museum"},
    {lat: 32.7468, lng: -97.3692, label: "Fort Worth Community Arts Center"},
    {lat: 32.7540, lng: -97.3597, label: "Gallery 414"},
    {lat: 32.7384, lng: -97.3946, label: "William Campbell Contemporary Art"},
    {lat: 32.7369, lng: -97.1086, label: "Arlington Museum of Art"},
    {lat: 32.731945, lng: -97.115059, label: "Gallery at the University of Texas at Arlington"},
    {lat: 32.7355, lng: -97.1214, label: "The UpStairs Gallery"},
    {lat: 32.8712, lng: -96.9673, label: "North Lake College"},
    {lat: 32.8504, lng: -96.9606, label: "Irving Arts Center"},
    {lat: 33.0210, lng: -96.7025, label: "ArtCentre of Plano"},
    {lat: 33.101178, lng: -96.825334, label: "Texas Sculpture Garden"}
]

var sportLocations = [
    {lat: 32.7905, lng: -96.8104, label: "American Airlines Center"},
    {lat: 32.7795, lng: -96.7595, label: "Cotton Bowl Stadium"},
    {lat: 33.1543, lng: -96.8352, label: "Toyota Stadium"},
    {lat: 33.0984, lng: -96.8197, label: "Dr. Pepper Ballpark"},
    {lat: 32.7512, lng: -97.0832, label: "Globe Life Park"},
    {lat: 32.7473, lng: -97.0945, label: "AT&T Stadium"},
    {lat: 32.789699, lng: -97.345338, label: "Stockyards Arena & The Stables"}
]

var natureLocations = [
    {lat: 32.6383, lng: -96.9549, label: "Cedar Ridge Preserve"},
    {lat: 32.7036, lng: -96.7053, label: "Trinity River Audubon Center"},
    {lat: 32.802290, lng: -96.750939, label: "Santa Fe Trail"},
    {lat: 32.919764, lng: -96.764983, label: "Cottonwood Trail"},
    {lat: 32.7016, lng: -96.6999, label: "McCommas Bluff Preserve"},
    {lat: 32.685427, lng: -96.958782, label: "Big Cedar on Prayer Mountain"},
    {lat: 32.2534, lng: -97.8097, label: "Dinosaur Valley State Park"},
    {lat: 32.1795, lng: -97.7972, label: "Fossil Rim Wildlife Center"},
    {lat: 32.6135, lng: -96.9711, label: "Dogwood Canyon Audubon Center"},
    {lat: 32.6195, lng: -96.9837, label: "Cedar Hill State Park"},
    {lat: 33.1583, lng: -96.6157, label: "Heard Natural Science Museum & Wildlife Sanctuary"},
    {lat: 33.2572, lng: -96.6544, label: "Erwin Park"},
    {lat: 33.1867, lng: -96.6439, label: "Alex Clark Memorial Disc Golf Course"},
    {lat: 32.7358, lng: -97.3664, label: "Fort Worth Japanese Garden"},
    {lat: 32.8434, lng: -97.4773, label: "Fort Worth Nature Center and Refuge"},
    {lat: 33.0879, lng: -96.5419, label: "Trinity Park"},
    {lat: 33.0577, lng: -96.6713, label: "Oak Point Park and Nature Preserve"},
    {lat: 33.0475, lng: -96.8487, label: "Arbor Hills Nature Center"},
    {lat: 32.7901, lng: -97.1148, label: "River Legacy Park"},
    {lat: 32.9821, lng: -97.1161, label: "Meadowmere Park"},
    {lat: 32.906697, lng: -96.935224, label: "Campion Trail"}
]

var musicLocations = [
    {lat: 32.7899, lng: -96.7986, label: "Meyerson Symphony Center"},
    {lat: 32.7905, lng: -96.8104, label: "American Airlines Center"},
    {lat: 32.7908, lng: -96.7975, label: "AT&T Performing Arts Center"},
    {lat: 33.0195, lng: -96.7006, label: "McCall Plaza"},
    {lat: 33.0833, lng: -96.8251, label: "Box Garden at Legacy Hall"},
    {lat: 32.7549, lng: -97.3301, label: "Bass Performance Hall"},
    {lat: 32.7499, lng: -97.0853, label: "Texas Live!"},
    {lat: 32.7668, lng: -96.9825, label: "Theater at Grand Prairie"},
    {lat: 32.8735, lng: -96.9449, label: "Toyota Music Factory"}
]

var techCompanies = [
    {Position : "Senior Software Engineer" , Company : "AT&T" , Location : "Dallas" , Application : "https://www.att.jobs/job/dallas/senior-software-engineer-devsecops/117/10769980" , lat : 32.7767, lng : 96.7970, label : "AT&T Headquarters"},
    {Position : "Senior Development, IT Applications" , Company : "American Airlines" , Location : "Fort Worth" , Application : "https://jobs.aa.com/job/Ft-Worth-DeveloperSenior-Developer%2C-IT-Applications-TX-76101/534724600/" , lat : 32.842998, lng : -96.981951, label : "American Airlines Headquarters"},
    {Position : "Data Scientist" , Company : "State Farm" , Location : "Richardson" , Application : "https://www.statefarm.com/careers/become-an-employee/office-locations/dallas-office" , lat : 33.00001913 , lng : -96.701399 , label : "State Farm Office"},
    {Position : "Engineering Intern" , Company : "Axxess" , Location : "Dallas" , Application : "https://workforcenow.adp.com/mascsr/default/mdf/recruitment/recruitment.html?cid=153b5e8f-6e7c-4b07-a07b-70fec40037cb&ccId=19000101_000001&type=MP&lang=en_US" , lat : 32.967072, lng : -96.819990, label : "Axxess Office"},
    {Position : "Systems Engineer" , Company : "Texas Instruments" , Location : "Dallas" , Application : "https://ti.taleo.net/careersection/ti_ex_standard/jobdetail.ftl?job=25780BR&tz=GMT-06%3A00" , lat : 32.911312, lng : -96.751672, label : "TI Office"}

]