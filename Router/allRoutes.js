import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/habitat", "Habitat", "/pages/habitat.html"),
    new Route("/services", "Services", "/pages/services.html"),
    new Route("/detailTigre", "Habitat du tigre", "/pages/animaux/detailTigre.html"),
    new Route("/detailZebre", "Habitat du Zebre", "/pages/animaux/detailZebre.html"),
    new Route("/detailGirafe", "Habitat de la Girafe", "/pages/animaux/detailGirafe.html"),
    new Route("/detailKoala", "Habitat du Koala ", "/pages/animaux/detailKoala.html"),
    new Route("/reservation", "reserver", "/pages/reservations/reservation.html"),
    new Route("/reservationBalade", "reservaton balade", "/pages/reservations/reservationBalade.html"),
    new Route("/reserverBalade", "reservation d'une Balade", "/pages/reservations/reserverBalade.html"),
    new Route ("/ficheReservation", "fiche de reservation", "/pages/reservations/ficheReservation.html"),
    new Route ("/signin", "Connexion", "/pages/auth/signin.html"),
    new Route ("/signup", "Inscription", "/pages/auth/signup.html"), 
    new Route ("/gestionService", "gestion des services", "/pages/admin/gestionService.html"),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Arcadia";