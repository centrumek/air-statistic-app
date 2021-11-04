export class UrlHelper {
  public static url(url: string): URL {
    let base = document.baseURI;
    if (!base) {
      const baseTags = document.getElementsByTagName('base');
      base = baseTags.length ? baseTags[0].href : document.URL;
    }
    return new URL(url, base);
  }
}
