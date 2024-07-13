export default class Route {
    constructor(url, title, pathHtml, authorize, pathJS = "") {
      this.url = url;
      this.title = title;
      this.pathHtml = pathHtml;
      this.pathJS = pathJS;
      this.authorize = authorize;
    }
}

/**
 [] -> Tout le monde peutt y accéder
  ["disconnected"] --> page réservée aux utilisateur déconnectés
  ["employé"] --> page réservée aux utilisateur employés
  ["vétérinaire"] --> page réservée aux utilisateur vétérinaire
  ["admin"] --> page réservée aux utilisateur admin
  ["admin", "vétérinaire", "employé"] --> page réservée aux utilisateur admin ou vétérinaire ou employé 
 */