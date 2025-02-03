declare function hljs(): void;
declare class hljs {
    highlight: (S: any, L: any, J: any, R: any) => {
        r: number;
        value: string;
        language: any;
        top: any;
    } | {
        r: number;
        value: any;
        language?: undefined;
        top?: undefined;
    };
    highlightAuto: (y: any, x: any) => {
        r: number;
        value: any;
    };
    fixMarkup: (v: any) => any;
    highlightBlock: (z: any) => void;
    configure: (v: any) => void;
    initHighlighting: () => void;
    initHighlightingOnLoad: () => void;
    registerLanguage: (v: any, x: any) => void;
    getLanguage: (v: any) => any;
    inherit: (x: any, y: any) => {};
    IR: string;
    UIR: string;
    NR: string;
    CNR: string;
    BNR: string;
    RSR: string;
    BE: {
        b: string;
        r: number;
    };
    ASM: {
        cN: string;
        b: string;
        e: string;
        i: string;
        c: {
            b: string;
            r: number;
        }[];
    };
    QSM: {
        cN: string;
        b: string;
        e: string;
        i: string;
        c: {
            b: string;
            r: number;
        }[];
    };
    CLCM: {
        cN: string;
        b: string;
        e: string;
    };
    CBLCLM: {
        cN: string;
        b: string;
        e: string;
    };
    HCM: {
        cN: string;
        b: string;
        e: string;
    };
    NM: {
        cN: string;
        b: string;
        r: number;
    };
    CNM: {
        cN: string;
        b: string;
        r: number;
    };
    BNM: {
        cN: string;
        b: string;
        r: number;
    };
    REGEXP_MODE: {
        cN: string;
        b: RegExp;
        e: RegExp;
        i: RegExp;
        c: ({
            b: string;
            r: number;
            e?: undefined;
            c?: undefined;
        } | {
            b: RegExp;
            e: RegExp;
            r: number;
            c: {
                b: string;
                r: number;
            }[];
        })[];
    };
    TM: {
        cN: string;
        b: string;
        r: number;
    };
    UTM: {
        cN: string;
        b: string;
        r: number;
    };
}
