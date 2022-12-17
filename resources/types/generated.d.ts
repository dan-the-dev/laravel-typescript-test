declare namespace App.Custom {
    export type Language = {
        name: string;
        value: string;
    };
}
declare namespace App.Http.Requests {
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
}
