import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/habitat", "Habitat", "/pages/habitat.html"),
    new Route("/services", "Services", "/pages/services.html"),
    new Route("/detailTigre", "La maison du tigre", "/pages/animaux/detailTigre.html"),
    new Route("/detailZebre", "La maison du Zebre", "/pages/animaux/detailZebre.html"),
    new Route("/detailGirafe", "La maison de la Girafe", "/pages/animaux/detailGirafe.html"),
    new Route("/detailKoala", "La maison du Koala ", "/pages/animaux/detailKoala.html"),
    new Route("/reservationRestauration", "détails de la Restauration", "/pages/services/restauration.html"),
    new Route("/reservationBalade", "détails des balades", "/pages/services/balade.html"),
    new Route("/reserverBalade", "reservation d'une Balade", "/pages/reservations/reserverBalade.html"),
    new Route ("/ficheReservation", "fiche de reservation", "/pages/reservations/ficheReservation.html"),
    new Route ("/signin", "Connexion", "/pages/auth/signin.html"),
    new Route ("/signup", "Inscription", "/pages/auth/signup.html"), 
    new Route ("/gestionService", "gestion des services", "/pages/admin/gestionService.html"),
    new Route("/reserver", "réserver une table", "/pages/reservations/reserver.html"),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Arcadia";