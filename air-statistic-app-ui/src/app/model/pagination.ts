export class Pagination {
  public page = 1;
  public limit = 25;

  constructor(page: number, limit: number) {
    this.page = page;
    this.limit = limit;
  }
}
