declare namespace App.Custom {
    export type Language = "en" | "fr" | "it";
}
declare namespace App.Http.Controllers.Test {
    export type TestFormRequest = {
        string: string;
        int: number;
        float: number;
        language: App.Custom.Language;
    };
    export type TestRequest = {
        string: string;
        int: number;
        float: number;
        language: App.Custom.Language;
    };
    export type TestResponse = {
        string: string;
        int: number;
        float: number;
        language: App.Custom.Language;
    };
}
