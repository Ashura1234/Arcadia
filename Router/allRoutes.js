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
    new Route("/reservation", "reserver", "/pages/reservation.html"),
    new Route("/reservationBalade", "reservaton balade", "/pages/reservationBalade.html"),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Arcadia";