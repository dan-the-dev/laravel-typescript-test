export type Language = "en" | "fr" | "it";
export type TestFormRequest = {
    string: string;
    int: number;
    float: number;
    language: Language;
};
export type TestRequest = {
    string: string;
    int: number;
    float: number;
    language: Language;
};
export type TestResponse = {
    string: string;
    int: number;
    float: number;
    language: Language;
};
