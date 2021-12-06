export interface ApiResponse<T> {
  success: string;
  data: T;
  message: string;
}

export interface ApiResponseData<T> {
  current_page: number;
  data: T;
  first_page_url: string;
  from: number;
  last_page: number;
  last_page_url: number;
  links: ApiLink[]
  next_page_url: string;
  path: string;
  per_page: number;
  prev_page_url: string;
  to: string;
  total: number;
}

export interface ApiLink {
  url: string;
  label: string;
  active: boolean
}
