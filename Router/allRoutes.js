import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.php", []),
    new Route("/habitat", "Habitat", "/pages/habitat.php", []),
    new Route("/services", "Services", "/pages/services.php", []),
    new Route("/detailTigre", "La maison du tigre", "/pages/animaux/detailTigre.php", []),
    new Route("/detailZebre", "La maison du Zebre", "/pages/animaux/detailZebre.php", []),
    new Route("/detailGirafe", "La maison de la Girafe", "/pages/animaux/detailGirafe.php", []),
    new Route("/detailKoala", "La maison du Koala ", "/pages/animaux/detailKoala.php", []),
    new Route("/reservationRestauration", "détails de la Restauration", "/pages/services/restauration.php", []),
    new Route("/reservationBalade", "détails des balades", "/pages/services/balade.php", []),
    new Route("/reserverBalade", "reservation d'une Balade", "/pages/reservations/reserverBalade.php", []),
    new Route("/reserverVisite", "détails de la visite", "/pages/services/reserverVisite.php", []),
    new Route ("/ficheReservation", "fiche de reservation", "/pages/reservations/ficheReservation.php", ["client"]),
    new Route ("/signin", "Connexion", "/pages/auth/signin.php", ["disconnected"]),,
    new Route ("/signup", "Inscription", "/pages/auth/signup.php", ["disconnected"], "/js/auth/signup.js"), 
    new Route ("/gestionUser", "gestion des services", "/pages/admin/gestionUser.php", ["admin"], "js/admin.js"),
    new Route("/reserver", "réserver une table", "/pages/reservations/reserver.php", ["client"]),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Arcadia";