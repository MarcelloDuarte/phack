<?php

namespace PhpLang\Phack\PhpParser\Parser;

/* GENERATED file based on grammar/tokens.y */
final class Tokens
{
    const YYERRTOK = 256;
    const T_INCLUDE = 257;
    const T_INCLUDE_ONCE = 258;
    const T_EVAL = 259;
    const T_REQUIRE = 260;
    const T_REQUIRE_ONCE = 261;
    const T_LAMBDA_ARROW = 262;
    const T_ENUM = 263;
    const T_LOGICAL_OR = 264;
    const T_LOGICAL_XOR = 265;
    const T_LOGICAL_AND = 266;
    const T_PRINT = 267;
    const T_YIELD = 268;
    const T_DOUBLE_ARROW = 269;
    const T_YIELD_FROM = 270;
    const T_PLUS_EQUAL = 271;
    const T_MINUS_EQUAL = 272;
    const T_MUL_EQUAL = 273;
    const T_DIV_EQUAL = 274;
    const T_CONCAT_EQUAL = 275;
    const T_MOD_EQUAL = 276;
    const T_AND_EQUAL = 277;
    const T_OR_EQUAL = 278;
    const T_XOR_EQUAL = 279;
    const T_SL_EQUAL = 280;
    const T_SR_EQUAL = 281;
    const T_POW_EQUAL = 282;
    const T_COALESCE = 283;
    const T_BOOLEAN_OR = 284;
    const T_BOOLEAN_AND = 285;
    const T_IS_EQUAL = 286;
    const T_IS_NOT_EQUAL = 287;
    const T_IS_IDENTICAL = 288;
    const T_IS_NOT_IDENTICAL = 289;
    const T_SPACESHIP = 290;
    const T_IS_SMALLER_OR_EQUAL = 291;
    const T_IS_GREATER_OR_EQUAL = 292;
    const T_SL = 293;
    const T_SR = 294;
    const T_INSTANCEOF = 295;
    const T_INC = 296;
    const T_DEC = 297;
    const T_INT_CAST = 298;
    const T_DOUBLE_CAST = 299;
    const T_STRING_CAST = 300;
    const T_ARRAY_CAST = 301;
    const T_OBJECT_CAST = 302;
    const T_BOOL_CAST = 303;
    const T_UNSET_CAST = 304;
    const T_POW = 305;
    const T_NEW = 306;
    const T_CLONE = 307;
    const T_EXIT = 308;
    const T_IF = 309;
    const T_ELSEIF = 310;
    const T_ELSE = 311;
    const T_ENDIF = 312;
    const T_LNUMBER = 313;
    const T_DNUMBER = 314;
    const T_STRING = 315;
    const T_STRING_VARNAME = 316;
    const T_VARIABLE = 317;
    const T_NUM_STRING = 318;
    const T_INLINE_HTML = 319;
    const T_CHARACTER = 320;
    const T_BAD_CHARACTER = 321;
    const T_ENCAPSED_AND_WHITESPACE = 322;
    const T_CONSTANT_ENCAPSED_STRING = 323;
    const T_ECHO = 324;
    const T_DO = 325;
    const T_WHILE = 326;
    const T_ENDWHILE = 327;
    const T_FOR = 328;
    const T_ENDFOR = 329;
    const T_FOREACH = 330;
    const T_ENDFOREACH = 331;
    const T_DECLARE = 332;
    const T_ENDDECLARE = 333;
    const T_AS = 334;
    const T_SWITCH = 335;
    const T_ENDSWITCH = 336;
    const T_CASE = 337;
    const T_DEFAULT = 338;
    const T_BREAK = 339;
    const T_CONTINUE = 340;
    const T_GOTO = 341;
    const T_FUNCTION = 342;
    const T_CONST = 343;
    const T_RETURN = 344;
    const T_TRY = 345;
    const T_CATCH = 346;
    const T_FINALLY = 347;
    const T_THROW = 348;
    const T_USE = 349;
    const T_INSTEADOF = 350;
    const T_GLOBAL = 351;
    const T_STATIC = 352;
    const T_ABSTRACT = 353;
    const T_FINAL = 354;
    const T_PRIVATE = 355;
    const T_PROTECTED = 356;
    const T_PUBLIC = 357;
    const T_VAR = 358;
    const T_UNSET = 359;
    const T_ISSET = 360;
    const T_EMPTY = 361;
    const T_HALT_COMPILER = 362;
    const T_CLASS = 363;
    const T_TRAIT = 364;
    const T_INTERFACE = 365;
    const T_EXTENDS = 366;
    const T_IMPLEMENTS = 367;
    const T_OBJECT_OPERATOR = 368;
    const T_LIST = 369;
    const T_ARRAY = 370;
    const T_CALLABLE = 371;
    const T_CLASS_C = 372;
    const T_TRAIT_C = 373;
    const T_METHOD_C = 374;
    const T_FUNC_C = 375;
    const T_LINE = 376;
    const T_FILE = 377;
    const T_COMMENT = 378;
    const T_DOC_COMMENT = 379;
    const T_OPEN_TAG = 380;
    const T_OPEN_TAG_WITH_ECHO = 381;
    const T_CLOSE_TAG = 382;
    const T_WHITESPACE = 383;
    const T_START_HEREDOC = 384;
    const T_END_HEREDOC = 385;
    const T_DOLLAR_OPEN_CURLY_BRACES = 386;
    const T_CURLY_OPEN = 387;
    const T_PAAMAYIM_NEKUDOTAYIM = 388;
    const T_NAMESPACE = 389;
    const T_NS_C = 390;
    const T_DIR = 391;
    const T_NS_SEPARATOR = 392;
    const T_ELLIPSIS = 393;
}
